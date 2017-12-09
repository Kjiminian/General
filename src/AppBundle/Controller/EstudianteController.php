<?php
/**
 * Created by PhpStorm.
 * User: kathy
 * Date: 08/12/2017
 * Time: 7:21 PM
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Estudiante;
use AppBundle\Form\EstudianteType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class EstudianteController
 * @package AppBundle\Controller
 * @Route("/estudiante")
 */

class EstudianteController extends Controller
{
    /**
     * @Route("/", name= "crear_estudiante")
     * @Method("GET")
     * @param Request $request
     * return JsonResponse
     */

    public function getEstudiantes(Request $request)
    {
        $estudiantes = $this->getDoctrine()->getRepository(Estudiante::class)->findAll();

        $data= $this->get('serializer')->serialize($estudiantes, 'json');
        $listaEstudiante= json_decode($data, true);

        return new JsonResponse($listaEstudiante);
    }
    /**
     * @Route("/", name= "crear_estudiante")
     * @Method("POST")
     * @param Request $request
     */


    public function createEstudiante(Request $request)
    {
        $data = json_decode($request->getContent(),true);

        $estudiante= new Estudiante();
        $form = $this->createForm(EstudianteType::class, $estudiante);

        $form->submit($data);

        if ($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($estudiante);

            $em->flush();

        }
        else
            {

            }
        $data = $this->get('serializer')->serialize($estudiante, 'json');

        $newEstudiante = json_decode($data,     true);
        return new JsonResponse($newEstudiante);
            /*dump($estudiante);
            */die;
    }
}