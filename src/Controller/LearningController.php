<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use \DateTime;

class LearningController extends AbstractController
{

    //annotations:

    /**
     * @Route("/learning", name="learning")
     */

    public function index(): Response {

        return $this->render('learning/index.html.twig',
            ['controller_name' => 'LearningController']);

    }

    /**
     * @Route("/about-me", name="about-me")
     * param SessionInterface $session
     * return Response
     */

    public function aboutMe(SessionInterface $session): Response {

        //This page should contains ome lorum ipsum text and no further functionality.
        //This page should be reachable by adding "/about-me" to the url.

        //return $this->render('learning/about-me.html.twig',
        //['controller_name' => 'LearningController']);

        if($session->get('name')){

            $name = $session->get('name');
            $date = new DateTime();
            $response = $this->render('about-me.html.twig',
                ['name' => $name, 'date' => $date]);
        }
        else {
            $response = $this->forward('App\Controller\LearningController::showMyName');
        }

        return $response;

    }

    /**
     * @Route("/", name="showMyName")
     * @param SessionInterface $session
     * @return Response
     */

    public function showMyName(SessonInterface $session) : Response {

        //Below the greeting there should be a form where the user can save his name.
        // When submitted (POST) this should send the user to the changeMyName page.

        //if(isset($_POST['name'])){
        //$this->name = $_POST['name'];
        //return $this->render('learning/nameChange.html.twig');
        //}

        if($session->get('name')){
            $name = $session->get('name');
        }
        else {
            $name = 'Unknown';
        }

        return $this-> render('learning/showName.html.twig', ['name' => $name]);


    }

    /**
     * @Route("/changeMyName", name="changeMyName", methods={"POST"})
     * param Request $request
     * param SessionInterface $session
     * return RedirectResponse
     */

    public function changeMyName(Request $request, Sessioninterface $session): RedirectResponse {

        //You should not be able to go to this URL if the method is not a POST request.
        // If the user arrives here from the change your name form, save his choice in a $_SESSION variable.

        //$_SESSION['name'] = $_POST['name'];

        $name = $request->request->get('name');
        $session->set('name', $name);

        return $this->redirectToRoute('showMyName');

    }

}

