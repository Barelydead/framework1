---
title: "Ramverk 1 - kmom10"
layout: "leftSideBar"
...
kmom10
=========================

**krav 1-3**

Webplatsen har en inloggningsfunktion som gör det möjligt för användare att skapa ett konto, redigera sitt konto samt logga in. När användaren är inloggad så har den tillgång till extra funktionalitet som att posta inlägg på forumet, skriva svar och kommentarer samt editera taggar.

På min startsida så har jag lagt till en text som beskriver forumet och hur det fungerar. Man ser också en överblick av det mest använda taggarna, de användarna som har mest karma och de senaste frågorna som postats i forumet. På min aboutsida så har jag skrivit kort om mig själv och om hemsidan. Länken till mitt github-konto ligger också där.

Inläggen som görs på forumet kopplas alltid till en användare. Går man in på användares profilsida så finns där statistik om användarens historik. Dels så visas inläggen som användaren har gjort och dels så får man se hur många inlägg som gjort totalt, likes, användaren status mm.

När man skapar ett nytt inlägg på forumet så behöver man tagga det. Det sker genom att användaren skriver in en rad med taggar och när posten skickas så kopplas dessa taggar ihop med inlägget. Man har även möjlighet att tagga om sitt inlägg i efterhand. Det finns en överblick över alla taggar som använts på sidan. I den vyn så visas taggens "namn",  beskrivning och hur många inlägg som har den taggen kopplat till sig.

När en fråga postas så har alla användare möjlighet att skriva svar i tråden och det går att lägga till kommentarer på alla svar. Går man in på tråden så ser man alla svar och kommentarer. Det finns också möjlighet att sortera svaren efter tid eller likes. Alla typer av inlägg en användare skriver kan formateras i markdown.

Koden finns upplags på github med tillhörande README som beskriver hur man checkar ut en egen verison av repot. Repot är sedan kopplat till scrutinizer och travis-CI. Badges från dessa tjänster finns i REAME-filen.

**krav 4**

Jag har lagt till funktionalitet så att det går att rösta på användares inlägg, upvote eller downvote. Detta visas sedan på inlägget så att användarna snabbt kan se vilka posts som har varit uppskattade. Väl i en tråd så kan man sortera svaren efter hur många röster de har fått. I översikten av frågor så kan man se hur många svar/kommentarer frågan har fått tillsammans med hur många likes frågan i sig har.

När en post blir upvotad så tjänar författaren 1 karma på det och vid en downvote så förlorar författaren 1 karma.

**krav 5**

Mycket av de en användare gör på sidan sparas som statistik på något sätt. När man skriver fågor, kommentarer eller svar så får man karma tilldelat till sitt konto. Blir ens inlägg likade så får man också karma.

Jag har inte gjort något särskilt poängsystem utan man får 1 poäng för de sakerna man tjäner karma på. De användare med mest karma visas på startsidan och på respsktive profil så får man mer information om hur intjänad karma, hur många upvotes eller downvotes en användare gjort samt hur många inlägg användaren totalt gjort.


**Om projektet**

Jag gillar att man inte starade på noll i detta projekt. Att ha den modulen man skapat i tidigare moment som en bas var väldigt trevligt och gjorde att jag kunde komma igång snabbt. Däremot så var inte min modul nog utvecklad utan jag fick göra ganska omfattande ändringar i koden för att lösa all funktionalitet som skulle finnas med. Av den anledningen så valde jag att plocka över modulen in i src-mappen så att jag på ett effektivt sätt kunde göra förbättringar/ändringar.

Även om projektet har gått bra att färdigställa så har jag haft mycket uppförsbackar på vägen. Det som tog extra mycket tid var att fundera ut hur jag skulle göra med taggarna. Jag valde att spara taggarna i en egen tabell som sedan kopplas till inläggen med en kopplingstabell. Det har blivit en hel del kod för att hålla reda på om en tag finns eller inte, om den har inlägg kopplat till sig, hur man taggar om ett inlägg osv. Tillslut så tycker jag det blev en ganska bra väg men det finns säkerligen förbättringar att göra.

Eftersom att jag har använt kopplingstabeller för taggar och likes mm så har jag blivit tvungen att skriva ganska mycket sql-kod. Det har gjort att jag inte fått ut så mycket som jag önskat av active-record och på många ställen använt sql tillsammans med den vanliga databas-modulen istället för AR.

Att jobba med MVC-tänket har gått bra för det mesta och det gör att strukturen på projektet har blivit bra, generellt sätt. Det finns dock några delar i projektet där jag blivit tvungen att ha en del av logiken i vyn. Detta är särskilt sant för vyn comments där hela tråden ska visas med fråga, svar, kommentarer, knappar för att göra ändringar med mera. Om det är något som jag skulle kunnat jobba vidare med så är det definitvt strukteren på den delen av applikationen men eftersom att tiden inte räckte till så fick jag nöja mig med att det fungerar.

Jag har inget negativt att säga om projektet utan jag tycker att det följer den röda tråden i kursen. Att man har kunnat göra lite val själv har också känts bra och omfattningen känns rimlig.


**Om kursen**

Jag har uppskattat den här kursen väldigt mycket. Det jag främst tar med mig från kursen är testning och modulisering. Det känns som två begrepp som man aldrig kan träna för mycket på och ju bättre man bli på det desto bättre kod kommer man att skapa. Jag gillar att vi i de tidigare kursmomenten jobbade med refactoring och fick en god introduktion till MVC-konceptet.

Det som jag tycker kan förbättras i kursen är modulen. Att skapa en modul känns relevant men det var väldigt tråkigt att göra en modul som i mångt och mycket är helt oanvändbar då den har för många beroenden och kräver väldigt mycket av anax-installationen den används på. Det hade varit betydligt roligare att göra en modul som blir helt fristående och då också användbar i ett senare skede.

Jag hade också önskat att vi fick mer information om hur man gör unittest. Visst vi har gjort det förut men den här gången var det väldigt mycket mer komplicerat eftersom att det fanns många beroenden. Eftersom att det inte fanns någon handledning om testerna blev det för svårt att på eget inititiv testa kontrollerklasserna på ett bra sätt.

Utöver den lilla feedbacken så tycker jag upplägget har varit bra. Det har varit enkelt att få hjälp via gitter när man kört fast och kursmaterialet håller god standard.

Mitt betyg av kursen blir 8/10 och jag skulle kunna rekommendera den till andra.  
