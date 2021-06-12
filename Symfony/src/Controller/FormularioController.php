<?php

namespace App\Controller;

use App\Entity\Series;
use App\Form\FiltroSeriesType;
use App\Repository\SeriesRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FormularioController extends AbstractController
{
    /**
     * @Route("/formulario", name="formulario")
     */
    public function index(Request $request): Response
    {
        $serie=new Series();
        $formulario=$this->createForm(FiltroSeriesType::class,$serie);
        $formulario->handleRequest($request);
        $filtro='';

        
        if($formulario->isSubmitted() && $formulario->isValid()){

            // Entity manager para hacer la consulta

            $creador = $formulario->get('creador')->getData();
            $fecha = $formulario->get('fecha')->getData();

            
            $consulta= $this->getDoctrine()->getRepository(Series::class);
            /*
            $consulta= $em->getRepository(Series::class)->findBy(
                array('fecha' => $fecha, 'creador' => $creador)
            );
            */
            $consulta= $consulta->filtrar($creador,$fecha);
            
            $filtro=$consulta;
        }

        return $this->render('formulario/index.html.twig', [
            'controller_name' => 'Formulario',
            'formulario'=>$formulario->createView(),
            'filtro'=>$consulta,
            
        ]);
    }
}
