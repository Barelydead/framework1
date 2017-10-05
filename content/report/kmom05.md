---
title: "Ramverk 3 - kmom"
layout: "leftSideBar"
...
kmom05
=========================

####Hur gick arbetet med att lyfta ut koden ur me-sidan och placera i en egen modul?
Det gick helt okej. Det som var lite klurigt var att veta vad jag ville ha med i min modul för att den skulle vara så enkel som möjligt att återanvända. Det jag valde att plocka ut blev CommentModel och CommentController tillsammans med UserModel. jag valde dessa tre klasser för att de är grunden av kommentarerna men jag valde att lämnade userController utanför då den också innehåller en hel del adminGUI saker. Det är definitivt inte en ren modul som går att använda i vilket projekt som helst men det var de bästa jag fick till.

####Flöt det på bra med GitHub och kopplingen till Packagist?
Japp, det var inga problem att få packagist att plocka upp uppdateringarna från Github. Det enda strulet jag haft var att packagist inte laddade hem senaste ändringen när jag hade taggat repot v.X.X.X istället för vX.X.X .

####Hur gick det att åter installera modulen i din me-sida med composer, kunde du följa du din installationsmanual?
Tillslut så fick jag allt att fungera men det var en del fixs och tricks längs vägen. Av någon anledning så fick jag problem när jag gjorde composer update. Jag vet att problemet diskuterats på gitter och det verkar som att det har med windows att göra. Det som sker är att composer inte kan ta bort modulen helt och hållet vilket gör att instalationen avslutas. Detta är inget jag har någon lösning på så jag har fått köra en temporär lösning där jag tar bort modulmappen och sedan gör composer update igen.

####Hur väl lyckas du enhetstesta din modul och hur mycket kodtäckning fick du med?
Sådär. Det var länge sedan vi gjorde tester så jag var lite rostig i hur man skulle komma igång. Att mina moduler sedan måste knyta an till en databas gjorde inte saken lättare. Jag valde att skapa en test databas alá sqlite där jag skapade de nödvändiga tabellerna. Modulen är också beroende av di-kontainern så jag skapade en configfil för att kunna använda DIFactoryConfig. När alla beroenden och klasser är klara så är det inte särskilt svårt att göra testar, men att komma dit var desto klurigare. Kodtäckningen i detta kursmoment är inget att skryta med och ligger på totalt 13%. Däremot så har jag 100% i CommentModel och ungefär 60% i userModel. Jag fortsätter i nästa kursmoment.

####Några reflektioner över skillnaden med och utan modul?
Rent funktionsmässigt så är det ju såklart ingen skillnad eftersom att det är samma kod. Däremot så tycker jag det känns bra att veta hur man kan plockar ut en del av koden för att kunna återanvända. Att jobba med modulära lösningar känns väldigt trevligt och även om det kanske är lite tidskrävande att skapa en modul så tror jag man får tillbaka det med råge om modulen i fråga är återanvändningsbar i fler sammanhang. Det blev också tydligt hur viktigt det är att inte lägga in massa beroenden. Ju mindre beroenden desto enklare att underhålla, testa och integrara på nytt.
