<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index()
    {
        return $this->render('contact/index.html.twig');
    }

    /**
     * @Route("/contact/send", name="sendMail")
     */
    public function new(Request $request, MailerInterface $mailer)
    {

        $email = (new Email())
            ->from($request->query->get('email'))
            ->to('toto@gmail.com')
            ->subject('oye')
            ->html($request->query->get('message'));

        $mailer->send($email);
        $this->addFlash('success', 'Message Send !');
        return $this->redirectToRoute('home');
    }
}
