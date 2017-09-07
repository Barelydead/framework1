Rem server
=============

![API](http://www.smssouthafrica.co.za/blog/wp-content/uploads/SMS-API-ZA-South-Africa.png)

####Introduktion
Remservern är ett restAPI som kan anropas med olika typer av requests. Gör man ett request mot APIet så är det antingen för att hämta information, ta bort information eller uppdatera information. Apiet är byggt med hjälp av en MVC arkitektur.

Den befintliga implementationen använder session för lagring av data.

####Metoder
Visa den fullstädiga dokumentationen för APIet

- /manual

Visa JSON repons av användarna

- GET /api/users

Visa JSON respons av användare 2

- GET /api/users/2

Lägg till en ny användare

- POST /api/users/{"name": "Christofer", "lastname": "Jungberg"}

Lägg till en ny datatyp

- POST /api/[data]


####Källkod

Källkoden för REM-servern finns att hitta på [Github](https://github.com/dbwebb-se/remserver)
