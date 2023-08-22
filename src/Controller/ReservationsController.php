<?php

namespace App\Controller;

use App\Entity\Field;
use App\Entity\Reservation;
use App\Entity\Timeslot;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
// use App\Form\Type\ReservationType;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/reservations')]
class ReservationsController extends AbstractController
{
    #[Route('/', name: 'app_reservations', methods: 'GET')]
    public function reservations(EntityManagerInterface $entityManager)
    {
        // *** Fetch datas
        // $fields = $entityManager->getRepository(Field::class)->findAll(); // should return fields and load their related reservations (with their timeslotss)
        // if (!$fields) {
        //     throw $this->createNotFoundException(
        //         'No fields found'
        //     );
        // }
        // *** Here we would need to inject in our function: ValidatorInterface $validator
        // $errors = $validator->validate($fields);
        // if (count($errors) > 0) {
        //     return new Response((string) $errors, 400);
        // }
        // $form = $this->createForm(ReservationType::class, $reservation);

        // *** Rendering response
        return $this->render(
            'reservations/reservations.html.twig',
            [
                'title' => 'Réservations',
                // 'form' => $form,
                'fields' => [

                    [
                        'name' => 'A',
                        'days' =>
                        [
                            [
                                'name' => 'lundi',
                                'slots' => [
                                    [
                                        'time_start' => '10h00',
                                        'time_end' => '10h45',
                                        'reservation' => true
                                    ],
                                    [
                                        'time_start' => '10h45',
                                        'time_end' => '11h30',
                                        'reservation' => false
                                    ],
                                    [
                                        'time_start' => '11h30',
                                        'time_end' => '12h15',
                                        'reservation' => true
                                    ],
                                    [
                                        'time_start' => '12h15',
                                        'time_end' => '13h00',
                                        'reservation' => true
                                    ]
                                ]
                            ],
                            [
                                'name' => 'mardi',
                                'slots' => [
                                    [
                                        'time_start' => '10h00',
                                        'time_end' => '10h45',
                                        'reservation' => false
                                    ],
                                    [
                                        'time_start' => '10h45',
                                        'time_end' => '11h30',
                                        'reservation' => true
                                    ],
                                    [
                                        'time_start' => '11h30',
                                        'time_end' => '12h15',
                                        'reservation' => true
                                    ],
                                    [
                                        'time_start' => '12h15',
                                        'time_end' => '13h00',
                                        'reservation' => true
                                    ]
                                ]
                            ],
                            [
                                'name' => 'mercredi',
                                'slots' => [
                                    [
                                        'time_start' => '10h00',
                                        'time_end' => '10h45',
                                        'reservation' => true
                                    ],
                                    [
                                        'time_start' => '10h45',
                                        'time_end' => '11h30',
                                        'reservation' => true
                                    ],
                                    [
                                        'time_start' => '11h30',
                                        'time_end' => '12h15',
                                        'reservation' => true
                                    ],
                                    [
                                        'time_start' => '12h15',
                                        'time_end' => '13h00',
                                        'reservation' => true
                                    ]
                                ]
                            ],
                            [
                                'name' => 'jeudi',
                                'slots' => [
                                    [
                                        'time_start' => '10h00',
                                        'time_end' => '10h45',
                                        'reservation' => false
                                    ],
                                    [
                                        'time_start' => '10h45',
                                        'time_end' => '11h30',
                                        'reservation' => false
                                    ],
                                    [
                                        'time_start' => '11h30',
                                        'time_end' => '12h15',
                                        'reservation' => false
                                    ],
                                    [
                                        'time_start' => '12h15',
                                        'time_end' => '13h00',
                                        'reservation' => true
                                    ]
                                ]
                            ],
                            [
                                'name' => 'vendredi',
                                'slots' => [
                                    [
                                        'time_start' => '10h00',
                                        'time_end' => '10h45',
                                        'reservation' => true
                                    ],
                                    [
                                        'time_start' => '10h45',
                                        'time_end' => '11h30',
                                        'reservation' => false
                                    ],
                                    [
                                        'time_start' => '11h30',
                                        'time_end' => '12h15',
                                        'reservation' => true
                                    ],
                                    [
                                        'time_start' => '12h15',
                                        'time_end' => '13h00',
                                        'reservation' => false
                                    ]
                                ]
                            ],
                            [
                                'name' => 'samedi',
                                'slots' => [
                                    [
                                        'time_start' => '10h00',
                                        'time_end' => '10h45',
                                        'reservation' => true
                                    ],
                                    [
                                        'time_start' => '10h45',
                                        'time_end' => '11h30',
                                        'reservation' => true
                                    ],
                                    [
                                        'time_start' => '11h30',
                                        'time_end' => '12h15',
                                        'reservation' => true
                                    ],
                                    [
                                        'time_start' => '12h15',
                                        'time_end' => '13h00',
                                        'reservation' => false
                                    ]
                                ]
                            ],
                        ]
                    ]

                ]
            ]
        );
    }


    // #[Route('/', name: 'app_reservations', methods: 'POST')]
    // public function newReservation(ValidatorInterface $validator)
    // {
    //     $reservation = new Reservation();
    //     $reservation->setUser(new User());

    //     // todo: get form data and send request

    //     $errors = $validator->validate($reservation);
    //     if (count($errors) > 0) {
    //         return new Response((string) $errors, 400);
    //     }
    // }
}
