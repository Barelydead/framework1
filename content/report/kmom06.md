---
title: "Ramverk 3 - kmom"
layout: "leftSideBar"
...
kmom06
=========================

####Har du någon erfarenhet av automatiserade testar och CI sedan tidigare?
Om man bortser från dbwebb-cli så är inget jag har stött på tidigare. Jag tycker det verkar är ett intressant område och nu när man har en del kunskap i hur man kommer igång och bygger ett projekt så känns det inte mer än rätt att vi börjar titta lite mer på hur man sedan får ut det projektet i drift på ett vettigt sätt. Så det ska bli kul att fortsätta med mer CI och förhoppningsvis titta mer på devops i nästa ramverkskurs.

####Hur ser du på begreppen, bra, onödigt, nödvändigt, tidskrävande?
Jag tycker automatiserad testning känns som en bra sak men för att få maximal effekt utav de arbetssättet så tror jag att man måste tänka på testning mycket tidigare än vad vi har gjort i denna kurs. Jag tror att min kod hade sett väldigt annorlunda ut om jag lagt till testning i ett tidigare skede. När jag inte testar koden under utvecklingen så ligger mitt fokus på att få funktionaliteten på plats och testbarhet och kodseparation blir sekundärt. På wikipedia artikeln så stod det såhär: "Frequent code check-in pushes developers to create modular, less complex code". Det håller jag med om till 100%.

Så min uppfattning hittills av CI är: Det fungerar bäst när man tänker på/integrerar testfall tidigt. Det är tidskrävande men slutresultatet kommer bli väldigt mycket mer pålitligt.

####Hur stor kodtäckning lyckades du uppnå i din modul?
Jag lyckades uppnå 65% kodtäckning. Majoriteten av min otestade kod ligger nu i kontrollerklassen. Jag har inte hittat något bra sätt att testa den då det finns väldigt många beroenden och jag har svårt att se vilka typer av asserts man kan använda för att få fram någon vettig information. För de övriga testen så var jag beroende av en databas som fungerar så jag valde att skapa en sqlite databas som innehåller de nödvändiga tabellerna. I de fallen där jag är tvungen att skriva något till databasen så finns också en tareDown-funktion som sedan rensar bort all data.

####Berätta hur det gick att integrera mot de olika externa tjänsterna?
Det var inga som helst problem. Eftersom att vi har en scaffoldad struktur som är förberett för att testas samt innehåller de olika tjänsernas config filer så handlar det ju bara om att lägga till sin modul på respektive hemsida. Jobbar man med ett fristående projekt där man själv behöver skapa motsvarigheten till make- och configfiler så kan det säkert vara lite mer tidskrävande.

####Vilken extern tjänst uppskattade du mest, eller har du förslag på ytterligare externa tjänster att använda?
Jag tycker att scrutinizer var det som gav mest. Att kunna få kodanalys, buildstatus och code coverage från en och samma tjänst känns överlägset då de andra tjänsterna bara gav en av dessa 3. Att scrutinizer också hade en trevlig hemsida och gav tydlig feedback på vad som kan förbättras är också ett plus.

Något som jag blev lite förvånad över är att scrutinizer och sensioLab gav väldigt olika feedback på min kodkvalitet. Så kanske kan det vara en bra idé att använda flera olika verktyg på ett och samma projekt.
