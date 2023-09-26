<?php
// 1 - invoer vragen en onthouden
// vraag gebruiker om invoer gebruikersnaam
print("Voer je gebruikersnaam in:\n");
// wijs invoer toe aan later te gebruiken variabele $in_naam
$in_naam = trim(fgets(STDIN)); // \n weghalen \n anders bv "Elon\n"
// vraag gebruiker om invoer wachtwoord
print("Voer je wachtwoord in:\n");
// wijs invoer toe aan later te gebruiken variabele $in_ww
$in_ww = trim(fgets(STDIN));

// 2 - vergelijken gegeven invoer met toegestane gebruikersgegevens en bepaal vervolgactie
// controleer of  ingevoerde gebruikersnaam EN wachtwoord overeenkomen met toegestane gebruiker
if ($in_naam == "Elon" && $in_ww == "x") { // of vergelijk met ===
    print("Welkom $in_naam, je hebt toegang"); // maak het eventueel persoonlijk door de ingevoerde naam mee te printen
} else {
    print("Je hebt GEEN toegang");
}

