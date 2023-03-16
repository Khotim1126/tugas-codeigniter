<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        echo view('about');
    }
    public function contact()
    {
        $data['name'] = "Guys";
        echo view("contact", $data);
    }
    public function faqs()
    {
        // membuat data untuk dikirim ke view
		$data['data_faqs'] = [
			[
				'question' => 'Kota Semarang dijuluki sebagai kota?',
				'answer' => 'Venetië van Java, Kota Lumpia, Kota Atlas, The Port of Java dan Semarang Pesona Asia'
			],
			[
				'question' => 'Apa saja makanan khas Semarang?',
				'answer' => 'Lumpia, Lapis Legit, Wingko Babat, Bandeng Presto, Tahu Gimbal, Tahu Pong, Tahu Petis, Soto Semarang, Babat Gongso, Nasi Ayam Semarang'
			],
			[
				'question' => 'Siapa saja tokoh terkenal Semarang?',
				'answer' => 'Alexander Kreshna S., Asty Ananta, Angie Ang, Tukul Arwana, Anne Avantie, Clarisa Dewi, Nh. Dini (1936), Joseph S. Djafar, Willem Einthoven (1860–1927), Nedly Andrew Girke Elstak, Peter F. Gontha, Fuad Hassan (1929–2007), Sri Mulyani Indrawati, Shania Junianatha, Philip ten Klooster, Robert Maingay, Ki Nartosabdho, Adjie Pangestu, Anindya Kusuma Putri, Daniel Sahuleka, Raden Saleh, Anna Shirley, Yayuk Suseno, Boy Tirayoh, Sakti Wahyu Trenggono, Johanna Carolina van der Wal, Mustari, Budayawan dan Turonggo Seto'
			]
		];

		// load view dengan data
        echo view('faqs', $data);
    }
}
