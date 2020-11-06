<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class LearningController extends AbstractController
{

    //annotations:

    /**
     * @Route("/learning", name="learning")
     */

public function index(): Response {

    return $this->render('learning/index.html.twig');

}

    /**
     * @Route("/about-me", name="about-me")
     */

public function aboutMe(){

    //This page should contains ome lorum ipsum text and no further functionality.
    //This page should be reachable by adding "/about-me" to the url.

    return $this->render('learning/about-me.html.twig',
        ['controller_name' => 'LearningController']);

}

    /**
     * @Route("/showMyName", name="showMyName")
     */

public function showMyName() : response {

    //Below the greeting there should be a form where the user can save his name.
    // When submitted (POST) this should send the user to the changeMyName page.

    if(isset($_POST['name'])){

        $this->name = $_POST['name'];
        return $this->render('learning/nameChange.html.twig');

    }
    else{
        return $this-> render('learning/showName.html.twig');
    }

}

    /**
     * @Route("/changeMyName", name="changeMyName")
     */

public function changeMyName(){

    //You should not be able to go to this URL if the method is not a POST request.
    // If the user arrives here from the change your name form, save his choice in a $_SESSION variable.

    $_SESSION['name'] = $_POST['name'];
    return $this->redirectToRoute('learning');

}

}