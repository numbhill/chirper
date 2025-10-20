<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChirpSeeder extends Seeder
{
    public function run(): void
    {
        // Create a bunch of "Parliament" users if not already seeded
        $users = User::count() < 15
            ? collect([
                User::create([
                    'name' => 'Edi Rama',
                    'email' => 'edi.rama@ps.al',
                    'password' => bcrypt('rilindje'),
                ]),
                User::create([
                    'name' => 'Sali Berisha',
                    'email' => 'sali.berisha@pd.al',
                    'password' => bcrypt('doktoriblu'),
                ]),
                User::create([
                    'name' => 'Ilir Meta',
                    'email' => 'ilir.meta@pl.al',
                    'password' => bcrypt('flamuriliri'),
                ]),
                User::create([
                    'name' => 'Lulzim Basha',
                    'email' => 'lulzim.basha@kea.al',
                    'password' => bcrypt('perndryshim'),
                ]),
                User::create([
                    'name' => 'Monika Kryemadhi',
                    'email' => 'monika.kryemadhi@pl.al',
                    'password' => bcrypt('mbreteresha'),
                ]),
                User::create([
                    'name' => 'Erion Veliaj',
                    'email' => 'erion.veliaj@tirana.gov.al',
                    'password' => bcrypt('bashkejemi'),
                ]),
                User::create([
                    'name' => 'Arben Ahmetaj',
                    'email' => 'arben.ahmetaj@ps.al',
                    'password' => bcrypt('reformefinanciare'),
                ]),
                User::create([
                    'name' => 'Elisa Spiropali',
                    'email' => 'elisa.spiropali@ps.al',
                    'password' => bcrypt('qeveriapune'),
                ]),
                User::create([
                    'name' => 'Pandeli Majko',
                    'email' => 'pandeli.majko@ps.al',
                    'password' => bcrypt('veterani'),
                ]),
                User::create([
                    'name' => 'Fatos Nano',
                    'email' => 'fatos.nano@ps.al',
                    'password' => bcrypt('nostalgjia'),
                ]),
                User::create([
                    'name' => 'Gazment Bardhi',
                    'email' => 'gazment.bardhi@pd.al',
                    'password' => bcrypt('kritikukronik'),
                ]),
                User::create([
                    'name' => 'Grida Duma',
                    'email' => 'grida.duma@pd.al',
                    'password' => bcrypt('argumenti'),
                ]),
                User::create([
                    'name' => 'Petrit Vasili',
                    'email' => 'petrit.vasili@pl.al',
                    'password' => bcrypt('komentatori'),
                ]),
                User::create([
                    'name' => 'Belind Kelliçi',
                    'email' => 'belind.kellici@pd.al',
                    'password' => bcrypt('riniangazhuar'),
                ]),
                User::create([
                    'name' => 'Albana Vokshi',
                    'email' => 'albana.vokshi@pd.al',
                    'password' => bcrypt('forcagruaje'),
                ]),
            ])
            : User::take(15)->get();

        // Funniest political "chirps" in the Parliament Edition 🏛️🐦
        $chirps = [
            // Rama
            'Sot pikturova një mur në Surrel dhe i vura titullin “Deficiti i opozitës”. 🎨',
            'Kush e gjeti penelin tim në Kryeministri, ta ruajë se është instrument politik. 😂',

            // Berisha
            'Rilindja është rrënim! Vetëm unë mund ta shpëtoj Shqipërinë nga kjo maskaradë! 🔥 #Foltorja',
            'Unë jam në formë, më shumë se çdo server që kanë këta të rinjtë! 💻',

            // Meta
            'Shqiponja ime fluturon lart! Kush më ndjek, merr flamur falas. 🇦🇱🦅',
            'Nuk jam kundër askujt, por edhe s’jam me askënd… filozofikisht! 🧘‍♂️',

            // Basha
            'E mora drejtimin e ri. Tani pres GPS-in të rifreskohet. 🗺️',
            'Jam në opozitë, por Wi-Fi s’më lidh dot me qeverinë! 📶',

            // Kryemadhi
            'Jam mbretëresha e çdo koalicioni, sado të jetë i shkurtër! 👑',
            'Kur s’ke fuqi, bëj zhurmë — kjo është art politik! 🎤',

            // Veliaj
            'Ngrita 3 sheshe, 2 kopshte dhe 1 “selfie spot”. Tirana është studio! 📸',
            'Kush mbjell pemë sot, do ketë oksigjen për komentin e nesërm! 🌳',

            // Ahmetaj
            'Kam reformuar gjithçka, përveç pushimeve! 💼✈️',
            'Ekonomia është si kafeja ime — e fortë, por me pak sheqer politik. ☕',

            // Spiropali
            'Qeveria flet pak, punon shumë… vetëm unë flet shumë, punon më shumë! 💬',
            'E kam thënë: s’ka opozitë, ka “komentatorë profesionalë” në Twitter! 😂',

            // Majko
            'Kthehem nga misionet e NATO-s, dhe gjej misione në rrjete sociale! 🪖📱',
            'Nëse politika do kishte update, do isha versioni 12.0 MajkoOS. 💾',

            // Nano
            'Unë isha para të gjithëve, dhe mbeta para pasqyrës me cigar. 🚬',
            'Nostalgjia është si opozita: gjithmonë aktive, por në kujtime. 😎',

            // Bardhi
            'Nëse heshtja është flori, unë jam banka e arit të opozitës! 🏦',
            'Kush më kërkon në Facebook, më gjen te foltorja dixhitale. 💻',

            // Duma
            'Debatet janë arti im. Të tjerët kanë zë, unë kam formë. 💅',
            'Në studio s’ka pushim — ka grim, dritë dhe opinion! 🎥',

            // Vasili
            'Nuk e kam problem të flas gjatë, problemi është kush më ndjek deri në fund! 🕒',
            'Analiza ime është si qeveria: zgjat, por vlen. 📊',

            // Kelliçi
            'Rinia s’ka nevojë për premtime, por për Wi-Fi falas në park! 📶🌳',
            'Kam planin për të ardhmen, vetëm s’kam serverin për ta ngarkuar. 😂',

            // Vokshi
            'Gratë në politikë s’kanë nevojë për leje, kanë agjendë. 💪',
            'Sot debatova 3 orë — tani shkoj të bëj “refresh” te durimi. 🔁',
        ];

        // Create chirps for random users
        foreach ($chirps as $message) {
            $users->random()->chirps()->create([
                'message' => $message,
                'created_at' => now()->subMinutes(rand(5, 1440)),
            ]);
        }
    }
}
