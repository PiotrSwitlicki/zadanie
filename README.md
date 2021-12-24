Zadanie rekrutacyjne, WebFalcon
Wymagania:
- aplikacja stworzona w Laravel 8
- php 7.4+, najlepiej 8
- mariadb/mysql
Mile widziane:
- Użycie VUE 3/2 do wyświetlania danych. Ewentualnie można użyć Reacta.
- Przesyłanie danych z backendu do “propsów”, poprzez Inertię.
- Użycie np. spinnera przy wczytywaniu danych asynchronicznych, bądź jakiejkolwiek
informacji o ładowaniu danych.
- Użycie repozytorium GitHub (prywatne/publiczne), oraz częste commitowanie zmian,
wraz z krótkim opisem.
Zadanie:
1. Utworzyć nowy projekt w wybranym frameworku.
2. Utworzenie tabeli wallet, która będzie przetrzymywać informacje o stanie konta
danego użytkownika, w jednej konkretnej walucie (np. PLN). Tabela ma być
powiązana z tabelą “users”. Proszę wybrać rodzaj relacji, który będzie według
Pana/Pani najlepszy do tego zadania. Proszę także o krótki opis wybranego typu
danych kolumny z zawartością portfela (np. float, int, unsignedint itp.)
3. Utworzenie prostej strony wyświetlającej stan konta (Najlepiej renderowaną poprzez
Vue/React).
4. Wykorzystanie API NBP http://api.nbp.pl/. Po wczytaniu strony ze stanem konta,
proszę użyć asynchronicznego JS (np. axios), aby wczytać “w locie” dane z API i
wyświetlić stan konta w dodatkowych 3 wybranych przez siebie walutach. Czyli sam
stan konta, ma być pobierany synchronicznie z backendu, dopiero po
wyrenderowaniu strony, należy pobrać kursy walut i wyświetlić odpowiednio
przemnożone kwoty.
W skrócie: Użytkownik się rejestruje, tworzy się także rekord z jego portfelem. Zawartość
portfela może być ustawiana losowo, w trakcie tworzenia konta. Po zalogowaniu
wyświetlana jest strona ze stanem konta, czyli bezpośrednio stan konta z bazy danych.
Dopiero potem “w locie” wczytywane są informacje o stanie konta w przeliczeniu na inne
waluty.
