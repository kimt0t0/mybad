<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\Field;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Reservation\getFields as getFields;
use App\Entity\Timeslot;
use App\Form\Type\ReservationType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

#[Route('/reservations')]
class ReservationsController extends AbstractController
{
    #[Route('/', name: 'app_reservations')]
    public function reservations()
    {
        $reservation = new Reservation();
        $reservation->setUser(new User());
        $form = $this->createForm(ReservationType::class, $reservation);
        return $this->render(
            'reservations/reservations.html.twig',
            [
                'title' => 'Réservations',
                'form' => $form,
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
}
