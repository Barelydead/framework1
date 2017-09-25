---
title: "Ramverk 3 - kmom"
layout: "leftSideBar"
...
kmom04
=========================

####Hur gick det att integrera formulärhantering och databashantering i ditt kommentarssystem?
Det gick fint att komma igång. Jag har utgått i från bok-exemplet när jag har integrerat formulären och Active record till kommentarssystemet. Övningen tyckte jag var bra och gav en fin intro till dessa begrepp. Jag har också kikat igenom Formklassen samt ActiveRecordModel för att få lite mer förståelse om vad som händer i koden.  

####Berätta om din syn på Active record och liknande upplägg, ser du fördelar och nackdelar?
Det som jag direkt kan se som en fördel i att använda ett sådant designmönster är att man kan flytta bort att SQL-kod från PHP-koden. Det tycker jag gör att det ser renare ut och visar på ett tydligt sätt vad koden gör. Det gör också att man minskar upprepning eftersom att man på ett snyggt sätt kan bygga metoder för att göra vanliga anrop mot databasen (CRUD).

 Det som jag har upplevt är en nackdel är att det blir krångligare att göra lite mer komplexa databasfrågor och att jobba med programmering av databasen, likt det vi gjorde i OOPhp. Detta problem kan mycket väl vara att jag fortfarande inte är så van vid att använda Active record men för tillfället så ser jag det som en nackdel.

####Utveckla din syn på koden du nu har i ramverket och din kommentars- och användarkod. Hur känns det?
Jag tycker strukturen är väldigt snygg och koden får en bra separation, var sak på sin plats. Jag tycker att jag har fått en god förståelse för hur man använder MVC på ett bra sätt och det är mycket jag gillar med ett sådant upplägg. Jag tycket HTMLForm var trevligt att jobba med och jag tror att det kan spara mycket tid på att använda en liknande lösning och göra mina formulär säkrare. Att kunna lägga till output i formulären för att visa användaren vad som händer tyckte jag också var väldigt smidigt.

Det som jag dock upplevt kan vara lite jobbigt är att man måste in i många filer för att exempelvis lägga till en undersida. Det krävs att man ska in i routern, sedan bygga en metod i controllern, eventuellt göra en ändring i någon model för att sist men inte minst hitta/bygga en vy som passar för innehållet. Något jag ska jobba vidare på i kommande kursmoment är att göra mer generella vyer så att jag har bättre kontroll över hur jag presenterar innehållet.


####Om du vill, och har kunskap om, kan du även berätta om din syn på ORM och designmönstret Data Mapper som är närbesläktade med Active Record. Du kanske har erfarenhet av likande upplägg i andra sammanhang?
Den erfarenhet jag har av ORM kommer ifrån OOPython-kursen där vi använde SQLAlchemy för att sköta hanteringen mot databasen. Vad som skiljer dessa olika designmönster åt har jag inte så bra koll på.

####Vad tror du om begreppet scaffolding, kan det vara något att kika mer på?
Scaffolding tycker jag verkar vara en utomordentlig teknik för att ha snabbt kunna komma igång med ett projekt. I och med att det går att anpassa vad som ska finnas med så kan man göra ett antal olika scaffolds med presets som passar för olika typer av projekt. Tidigare har jag tänkt att ramverk är något man jobbar med när man vill göra större projekt men med scaffolding så kan det passa lika bra att göra en enkel statisk websida.

Att använda scaffolding förutsätter dock att man har erfarenhet av ramverket och dess komponeter för användas på ett bra sätt. Har man inte det så tror jag att man lätt missar funktionalitet och det kan vara svårt att förstå hur allt hänger ihop.
