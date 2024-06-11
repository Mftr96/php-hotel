DESCRIZIONE
Partiamo da questo array di hotel. Stampare tutti i nostri hotel con tutti i dati disponibili.
Iniziate in modo graduale:
Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo organizzate i dati in una tabella.
Infinite stilizzate usando Bootstrap o il vostro CSS.
Nel prossimo messaggio riporterò i bonus.

 BONUS #1
Realizzate una pagina separata (ricerca.php) con un form.
Questo dovrà permettere all'utente di filtrare gli alberghi in base al parcheggio (presente, assente, mostra tutti).
Il form dovrà ovviamente puntare alla pagina che elenca l'array di alberghi, che dovrà controllare se è presente il parametro GET passato dal form.
In base a questo stamperete tutti i dati, oppure solo quelli ricercati.

 BONUS #2
Come il precedente, ma aggiungerete un filtro per voto. Ad esempio inserendo "3" otterrò tutti gli hotel che hanno un voto di tre stelle o superiore.
Dovrà essere possibile usare entrambi i filtri contemporaneamente per ottenere ad esempio tutti gli alberghi con parcheggio e voto superiore a 3.

BONUS #3
Realizzate tutto con un'unica pagina:
controllate se sono presenti parametri GET
mostrate i filtri, in un form con action che punta alla pagina stessa
mostrate gli alberghi, tutti o filtrati (in base alla presenza di parametri GET)

Live coding aggiornato qui. Usatelo per aiutarvi, insieme alle slide!

Buon lavoro a tutti! 
---
esecuzione:
cosa mi serve:
-array di dati da importare ad inizio pagina

dopo aver importato l'array ad inizio pagina vado a stampare i componenti in html.
Il modo più semplice è tramite var_dump inserendo nella parentesi l'array 

dopo aver fatto una stampa semplice di array, provo in un div a ciclare gli elementi dell'array $hotel facendo apprarire in un tag pre i vari indici separati dell'array hotel








