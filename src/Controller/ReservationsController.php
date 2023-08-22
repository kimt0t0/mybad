<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Reservation\getFields as getFields;

#[Route('/reservations')]
class ReservationsController extends AbstractController
{
    #[Route('/', name: 'app_reservations')]
    public function reservations()
    {
        return $this->render(
            'reservations/reservations.html.twig',
            [
                'title' => 'Réservations',
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
