<?php

namespace App\Controller;

//use App\Entity\Customer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//use Symfony\Component\HttpKernel\Attribute\AsController;

//#[AsController]

class CustomerController extends AbstractController
{
    /*
    public function invoke(integer $id)
    {
        $cust = $this->getDoctrine()
            ->getRepository(Customer::class)
            ->findBy(
                ['id' => $id],
            );
 
        if (!$$cust) {
            throw $this->createNotFoundException(
                'NO NO NO N ON '
            );
        }
 
        return $cust ;
    }
    */
    public function createCustomer()
    {
        $em = $this->getDoctrine()->getManager();

        $data = new Customer();

        $data->setName("mmm");
        $data->setEmail("k@gmm.com");
        $data->setPhoneNumber("2345");

        $em->persist($$data);
        $em->flush();
        
    }

    
  
   
    
}
