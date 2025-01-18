<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;  

class TaskController extends AbstractController
{
    #[Route('/tasks', name: 'task_index')]
    public function index(): Response
    {
        return $this->render('task/index.html.twig', [
            'controller_name' => 'TaskController',
        ]);
    }

    #[Route('/tasks/create', name: 'task_create')]
    public function create(): Response
    {
        return $this->render('task/create.html.twig', [
            'controller_name' => 'TaskController',
        ]);
    }

    #[Route('/tasks/edit/{id}', name: 'task_edit')]
    public function edit(int $id): Response
    {
        return $this->render('task/edit.html.twig', [
            'controller_name' => 'TaskController',
        ]);
    }

    #[Route('/tasks/{id}', name: 'task_view')]
    public function view(int $id): Response
    {
        return $this->render('task/view.html.twig', [
            'controller_name' => 'TaskController',
        ]);
    }

    #[Route('/tasks/delete/{id}', name: 'task_delete')]
    public function delete(int $id): Response
    {
        return new Response('Tâche supprimée : ' . $id);
    }
}
