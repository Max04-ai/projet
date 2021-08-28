<?php

namespace App\Controller;

use App\Repository\AgentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiAgentController extends AbstractController
{
    /**
     * @Route("/api/agent", name="api_agent",methods={GET})
     */
    public function index(AgentRepository $agentRepository): Response
    {
       $agent = $agentRepository->findAll();
       dd($agent);
        
    }
}
