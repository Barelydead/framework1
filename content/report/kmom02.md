---
title: "Ramverk 2 - kmom"
layout: "leftSideBar"
...
kmom02
=========================


####Vilka tidigare erfarenheter har du av MVC? Använde du någon speciell källa för att läsa på om MVC? Kan du med egna ord förklara någon fördel med kontroller/modell-begreppet, så som du ser på det?
Jag har egentligen inte några tidigare erfarnheter av MVC förutom att jag har hört bereppet i flera olika sammahang tidigare. Det är dock inget jag har fördjupat mig i eller förstått exakt vad det betyder.

Jag läste på om MVC via wikipedia samt artikeln som tillhörde kursmomentet. Jag tycker det gav en kort och sammanfattad Introduktion till vad MVC är och hur det används. Utöver det så studerade jag koden till REM-servern för att bättre förstå hur det kan fungera i den miljön vi jobbar i.

Det jag tycker verkar vara stor fördel med att använda MVC är att man får en tydlig uppdelning av vad som är frontend och vad som är backend. Det gör att det finns en möjlighet att dela upp ett projekt så att någon kan jobba med frontend och någon annan med backend. Utöver uppdelningen av arbetsuppgifter så är också separationen av kod i sig viktigt då det blir enklare att förstå vad som sker i koden och det blir lättre att komma in i ett projekt även om man inte har kunskap om kodbasen sedan tidigare.


####Kom du fram till vad begreppet SOLID innebar och vilka källor använde du? Kan du förklara SOLID på ett par rader med dina egna ord?
Jag tyckte SOLID var ett ganska svårt begrepp att förstå fullt ut. Jag tittade på videon som hörde till kursmaterialet samt har läst wikipedia sidan som beskriver SOLID. Nåväl här är mitt försök att besrkiva SOLID med egna ord.

Det som verkar vara en röd tråd genom detta begrepp är att separera koden på ett bra sätt så att man får många små moduler istället för en stor kodmassa. Genom att göra det så blir koden enklare att testa, underhålla och gör att de delar av programmet som behöver en viss funktionalitet får det men inget mer. Det låter som att MVC och dependency injection är två metoder man kan använda för att uppnå SOLID.



**S**ingle responsibility principle:

Detta betyder att en klass endast ska ha ett ansvarsområde vilket också gör att det endast finns en anledning att göra ändringar till den klassen. Vad jag får ut av detta är att man ska bryta ned koden till mindre beståndsdelar som är fristående från varandra.

**O**pen/closed principle:

En klass ska vara öppen för att utökas med stäng för att modifieras. Denna princip är för mig svår att förstå innebörden av.

**L**iskov substitution principle:

Man ska kunna byta ut ett objekt mot dess beståndsdelar utan att det uppstår fel i programmet.

**I**nterface segregation principle:

Man ska sträva efter att göra många enkla interface istället för få omfattande. Detta för att undvika att skapa beroenden som man egentligen inte behöver.

**D**ependency inversion principle:

Klasser ska inte vara direkt beroende av andra klasser utan ska flätas samman i annan kod som skrivs på en högre nivå.

****


####Gick arbetet med REM servern bra och du lyckades integrera den i din me-sida?
Det var inga som helst problem att integrera REM-servern. Artiklen var väldigt beskrivande och jag följde den ganska tätt vilket gjorde att jag inte stötte på några problem. Det var också bra att ha den Introduktion då det visade på ett bra sätt hur MVC-arkitektur kan implementeras i praktiken. Något som förvånade mig är hur lite kod det krävdes för att bygga ett så pass väl fungerande API. Visst kan det säkert bli lite mer komplicerat om man ska ha en permanent lagring, men endå!

####Berätta om arbetet med din kommentarsmodul, hur långt har du kommit och hur tänker du?
Jag har i detta kursmoment försökt att fokusera på att förstå och använda MVC-arkitekturen och av den anledningen inte lagt inte så mycket extra funktionalitet.

Till en början tyckte jag att det blev lite kaka på kaka att ha en controller som anropar en modell för att sedan uppdatera vyn. Jag såg inte nyttan med att dela upp allt i flera steg, men allt eftersom jag jobbade vidare så upptäckte jag att koden blev väldigt läsbar och enkel att förstå. Jag tror att detta kommer bli ännu tydligare när jag sedan byter ut session mot en databaskoppling.

I denna version så finns det egentligen 4 funktioner. Man kan läsa kommentarer, skriva nya, uppdatera och ta bort. CRUD helt enkelt. Jag har valt att inte blanda in inloggning och lagring till en databas än utan som jag skrev tidigare så ville jag få MVC-strukturen på plats först för att sedan jobba vidare i kommande kursmoment.
