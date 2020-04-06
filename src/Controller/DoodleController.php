<?php

namespace App\Controller;

use App\Entity\Result;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DoodleController extends AbstractController
{
    /**
     * @Route("/doodle", name="doodle")
     */
    public function index(Request $request, EntityManagerInterface $manager)
    {
        $result = new Result();
        $form = $this->createFormBuilder($result)
            ->add('pseudo')
            ->getForm();

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $repo = $this->getDoctrine()->getRepository(Result::class);
            $pseudoAlreadyExisting = $repo->findOneByPseudo($result->getPseudo());
            if ($pseudoAlreadyExisting !== null) {
                if ($pseudoAlreadyExisting->getScore() < $result->getScore()) {
                    $pseudoAlreadyExisting->setScore($result->getScore());
                    $manager->persist($pseudoAlreadyExisting);
                    $manager->flush();
                }else{
                    $newResult = new Result();
                    $newResult->setPseudo($result->getPseudo()."001");
                    $newResult->setScore($result->getScore());
                    $manager->persist($newResult);
                    $manager->flush();
                }
            } else {
                $manager->persist($result);
                $manager->flush();
            }
            return $this->redirectToRoute('doodle');
        }

        return $this->render('doodle/index.html.twig', [
            'controller_name' => 'DoodleController',
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/doodle/setNewscore", name="setNewScore")
     * @param Request $request
     * @param ObjectManager $manager
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function setNewScore(Request $request, EntityManagerInterface $manager)
    {
        if ($request->request->count() > 0) {
            $scoreRecord = new Result();
            $scoreRecord->setPseudo($request->request->get('pseudo'));
            $scoreRecord->setScore($request->request->get('score'));


            $manager->persist($scoreRecord);
            $manager->flush();

            return $this->redirectToRoute('doodle');
        }
        return $this->redirectToRoute('doodle');
    }
}
