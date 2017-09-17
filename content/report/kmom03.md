---
title: "Ramverk 3 - kmom"
layout: "leftSideBar"
...
kmom03
=========================


####Hur känns det att jobba med begreppen kring dependency injection, service locator och lazy loading?
Med de gedigna artiklarna som beskrev och visade hur man implementerar detta så var det inga problem att komma igång. Däremot så har jag nog inte fullt ut förstått och uppskattat fördelarna med att strukturera sina projekt på detta sätt. Men nu när jag har läst på och i teorin förstår vad som sker så kommer det nog visa sig mer och mer varför man väljer att gå just den här vägen. Det brukar vara så för mig att jag behöver jobba med något en tid innan jag får grepp och allt som sker och varför man vill ha det just så.

####Hur känns det att göra dig av med beroendet till $app, blir $id bättre?
I kodandet så är det väl varken till eller från egentligen. Den största skillnaden är ju att man använder ett annat variabelnamn när man använder sina klasser. Att det sedan bli en bättre struktur där man separerar saker på ett bättre sätt är ju såklart ett plus men i detta hittills relativt lilla projekt så kan jag inte säga att jag ser så stor skillnad. Det som jag tyckte var den största och mest påtagliga ändringen var hur vi gjorde om routesen. Detta har nu blivit tydligare och controllerklasserna får nu ett mer tydligt syfte.

####Hur känns det att återigen göra refaktoring på din me-sida, blir det förbättringar på kodstrukturen, eller bara annorlunda?
Att göra refaktoring är ett bra sätt att lära sig på tycker jag. I och med att man måste vara inne i alla delar av ramverket för att lägga till dessa ändringar så får man en god översikt av hela kodmassan och det hjälper mig att förstå hur allt hänger ihop på ett bra sätt. Blir det sedan bättre struktur? Ja, troligtvis. Men i och med att det hela tiden är nya koncept man ska arbeta med så tar det också längre tid att lägga till funktionallitet. När man sedan får en vana av ett sådant här upplägg så tror jag det kommer vara toppen.

####Lyckades du införa begreppen kring DI när du vidareutvecklade ditt kommentarssystem?
Jag har inte gjort några stora ändringar i sjävla kommentarssystemet i detta kursmoment men jag har lyckats få bort $app helt och hållet och använder nu bara $di istället.

####Påbörjade du arbetet (hur gick det) med databasmodellen eller avvaktar du till kommande kmom?
Jag började lite smått genom att tänka igenom vilka tabeller jag kommer behöva och skrev SQL-kod för det. Jag passade även på att lägga till database-klassen till DI och kontrollerade så att databaskopplingen fungerade. Däremot så väntar jag till nästa vecka med att implementera det.

####Allmänna kommentare kring din me-sida och dess kodstruktur?
Jag tycker kodstrukturen känns bra. Det är skönt att ha kunnat plocka bort all kod från vyer och routes och istället lagt över det till klasser. Man har allt på ett ställe och potentialen för att senare lägga till tester känns mycket bättre.

Som jag skrev tidigare så tycker jag routern ser mycket bättre ur och det blir mer enhetligt när man jämför med de andra konfig-filerna vilket jag tror är bra.
