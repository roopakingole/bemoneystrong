<?php

namespace Bolt\Extension\Bcflc\ProgramManager;

//use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Bolt\Application;
use Silex;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;


//extends Controller
class ProgramScheduleController
{
    public function scheduleAction(Silex\Application $app, Request $request)
    {
        $program_id = $request->request->get('program_id');
     
        //$em = $this->getDoctrine()->getManager();
        //$programs = $em->getRepository('MainBundle:bolt_custom_programs')->findByProgramId($program_id);

        // Make the query to get the results.
        //$query = "SELECT name FROM bolt_custom_programs";
        $query = sprintf("select date_start from bolt_custom_programs where date_start > strftime('%%m/%%d/%%Y', date('now')) AND name = '%s'",$program_id);
        //$query = sprintf("select owner from bolt_custom_programs where name = '%s'",$program_id);

        $programs = $app['db']->executeQuery($query)->fetchall();

        return new JsonResponse($programs);
    }

    public function scheduleDateAction(Silex\Application $app, Request $request)
    {
        $date_id = $request->request->get('date_id');
        $program_id = $request->request->get('program_id');
     
        //$em = $this->getDoctrine()->getManager();
        //$programs = $em->getRepository('MainBundle:bolt_custom_programs')->findByProgramId($program_id);

        // Make the query to get the results.
        //$query = "SELECT name FROM bolt_custom_programs";
        $query = sprintf("select time_start,time_end from bolt_custom_programs where date_start = '%s' AND name = '%s'",$date_id, $program_id);
        //$query = sprintf("select owner from bolt_custom_programs where name = '%s'",$program_id);

        $timeslots = $app['db']->executeQuery($query)->fetchall();

        return new JsonResponse($timeslots);
    }    
}