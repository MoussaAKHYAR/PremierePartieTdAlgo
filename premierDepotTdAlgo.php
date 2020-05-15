Programme exo1
variables a,b,q,r : entier
          qr      : reel
Debut
  Repeter
      Afficher("saisir 2 nombres a et b ")
      Lire(a,b)
  jusqu'a(b<>0)
  qr <- a/b
  q  <- a/b
  r  <- a mod b
  Afficher("le quotient de la division est : ",q)
  Afficher("le quotient Reel de la division est : ",qr)
  Afficher("le reste de la division est : ",r)
Fin
--------------------------------------------------
--------------------------------------------------
Programme exo2
constante pi = 4*atan(1)
variables r,s,p:reel

Debut
  Afficher("saisir le rayon de la surface")
  lire(r)
  s <- r*r*pi
  p <- 2*pi*r
  Afficher("la surface du cercle est : ",s,"m2")
  Afficher("le périmetre du cercle est : ",p,"m")
Fin
-----------------------------------------------------
-----------------------------------------------------
Programme exo3V1
variables r1,r2,r3,rs,rp:reel

Debut
  Repeter
    Afficher("saisir les résistances")
    lire(r1,r2,r3)
  jusqua(r1<>0 et r2<>0 et r3<>0)
  rs <- r1+r2+r3
  rp <- (r1*r2*r3)/(r1*r2 + r2*r3 + r1*r3)
  Afficher("Resistence en série : ",rs)
  Afficher("Resistance en paralléle : ",rp)
Fin
-----------------------------------------------------
-----------------------------------------------------
Programme exo3V2
variables r1,r2,r3,rs,rp:reel
          rep           :entier

Debut
  Repeter
      Afficher("saisir les résistances")
      lire(r1,r2,r3)
  jusqua(r1<>0 et r2<>0 et r3<>0)
  Afficher("1 : Pour la resistance en série")
  Afficher("2 : Pour la resistance en paralléle")
  Afficher("veuillez faire votre choix")
  lire(rep)
  si(rep = 1) alors
    rs <- r1+r2+r3
    Afficher("Resistence en série : ",rs)
  sinon si(rep = 2 ) alors
           rp <- (r1*r2*r3)/(r1*r2 + r2*r3 + r1*r3)
           Afficher("Resistance en paralléle : ",rp)
        sinon
           Afficher("Choix non disponible")
        fsi
  fsi
Fin
---------------------------------------------------------------
---------------------------------------------------------------
Programme exo4
variables nombre,r:reel
          n     :entier
Debut
  Afficher("Saisir un nombre")
  lire(nombre)
  Afficher("Saisir la puissance")
  lire(n)
  r <- pow(nombre,n)
  Afficher("le résultat du nombre ",nombre,"^",n,"est :",r)
Fin
--------------------------------------------------------------------
--------------------------------------------------------------------
Programme exo4AvecBoucle
variables nombre,r:reel
          n,i     :entier
Debut
  Afficher("Saisir un nombre")
  lire(nombre)
  Afficher("Saisir la puissance")
  lire(n)
  i<-1
  r<-1
  tantque i<=n faire
    r<- r*nombre
    i <- i+1
  fintantque
  Afficher(nombre,"^",n,"est egal à : ",r)
Fin
--------------------------------------------------------------------
--------------------------------------------------------------------
Programme exo5
variables val,i   :entier
          somme :reel
Debut
  i<-1
  somme<-0
  Pour i <-- 1 à 5
    Afficher("saisir la ",i,"ere valeur : ")
    lire(val)
    somme <- somme + val
  finpour
    Afficher("la somme des valeurs saisies est : ",somme)
Fin
----------------------------------------------------------------------
----------------------------------------------------------------------
Programme exo6
Variables x1,y1,x2,y2,c,d :reel

Debut
  Afficher("Entrer les coordonnées du point A (x1,y1)")
  lire(x1,y1)
  Afficher("Entrer les coordonnées du point B (x2,y2)")
  lire(x2,y2)

  c <- ((x1-x2)*2 + (y1-y2)*2)
  si(c>0) alors
    d <- sqrt(c)
    Afficher("la distance entre les points A et B est : ",d)
    sinon
      Afficher("impossible")
  fsi
Fin
----------------------------------------------------------------------
----------------------------------------------------------------------
Programme exo7
Variables montant,b20,b10,b5,p2,p1  :entier

Debut
  Repeter
    Afficher("Entrer le montant à decomposer")
    lire(montant)
  jusqua(montant>0)
  b20 <- montant/20
  b10 <- (montant%20)/10
  b5 <-  ((montant%20)%10)/5
  p2 <-  (((montant%20)%10)%5)/2
  p1 <-  ((((montant%20)%10)%5)%2)
  Afficher("le montant a ",b20," billets de 20",b10,"billets de 10 ",b5,"billets de 5",p2,"pieces de 2 ",p1,"piece de 1")
Fin
---------------------------------------------------------------------------
---------------------------------------------------------------------------
Programme exo8
variables a,b,c,d,x1,x2 :reel

Debut
  Repeter
    Afficher("Entrer les valeurs a,b et c avec a#0 ")
    lire(a,b,c)
  jusqua(a<>0)
  d <- b*b*4*a*c
  si(d>0) alors
    x1 <- (-b-sqrt(d))/2*a
    x2 <- (-b+sqrt(d))/2*a
    Afficher("les solutions de l'equation est : X1",x1," X2",x2)
  fsi
  si(d=0) alors
    x1 <- -b/2*a
    Afficher("la solution est :",x1)
  fsi
Fin
-------------------------------------------------------------------------
-------------------------------------------------------------------------
Programme exo9A
variables hd,ha,md,ma,dha,dma :entier

Debut
  Repeter
    Afficher("Entrer l'heure et minutes de départs ")
    lire(hd,md)
  jusqua((hd>0 et hd<24) ET (md>0 et md<60))
  Repeter
    Afficher("Entrer l'heure et minutes de d'arrivée ")
    lire(ha,ma)
  jusqua((ha>0 et ha<24) ET (ma>0 et ma<60))

  si(ha>hd) alors
    dha <- ha - hd
    dma <- ma + md
    si(dma >= 60)alors
      dha <- dha + 1
      dma <- dma - 60
    fsi
    Afficher("la durée du vol est : ",dha,"Heures ",dma,"minutes ")
  sinon
    Afficher("heure d'arrivée ne peut pas etre inferieure à l'heure de départ")
  fsi
Fin
-----------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------
Programme exo9B
variables hd,ha,md,ma,dha,dma :entier

Debut
  Repeter
    Afficher("Entrer l'heure et minutes de départs ")
    lire(hd,md)
  jusqua((hd>0 et hd<24) ET (md>0 et md<60))
  Repeter
    Afficher("Entrer l'heure et minutes de d'arrivée ")
    lire(ha,ma)
  jusqua((ha>0 et ha<24) ET (ma>0 et ma<60))
  si(ha <= hd) alors
    dha <- 24 - hd + ha
    dma <- md + ma
    si(dma >= 60) alors
      dha <- dha + 1
      dma <- dma - 60
    fsi
    Afficher("la durée du vol est : ",dha,"heures et ",dma,"minutes ")
    sinon
      dha <- ha - hd
      dma <- ma + md
      si(dma >= 60) alors
        dha <- dha + 1
        dma <- dma - 60
      fsi
      Afficher("la durée du vol est : ",dha,"heures et ",dma,"minutes ")
  fsi
Fin
------------------------------------------------------------------------------
------------------------------------------------------------------------------
Programme exo10
Variables tableau tab[3]:entier
          i,j,tmp,min   :entier
Debut
  Pour i <- 1 à 3 faire
    Afficher("Saisir une valeur")
    lire(tab[i])
  Fpour
  Pour i <- 1 à 2 faire
    min <- i
    Pour j <- i+1 à n faire
      si(tab[j] < tab[min])
        min <- j
      fsi
    Fpour
    si(min <> i) alors
      tmp <- tab[min]
      tab[min] <- tab[i]
      tab[i] <- tmp
    fsi
  Fpour
  Pour i <- 1 à 3 faire
    Afficher("les valeurs aprés tri sont ", tab[i])
  Fpour
Fin
----------------------------------------------------------------------------
----------------------------------------------------------------------------
Programme exo11
Variables a,b :entier
          op  :caractere

Debut
  Afficher("Entrer une premier valeur")
  lire(a)
  Afficher("Entrer l'operateur")
  lire(op)
  Afficher("Entrer une deuxieme valeur")
  lire(b)
  Selon op faire
    '+' : Afficher("la somme des 2 valeurs est ", a+b)
    '*' : Afficher("le produit des 2 valeurs est ", a*b)
    '-' : Afficher("le resultat de ",a,"-","b","est : ", a-b)
    '/' : si(b <> 0) alors
            Afficher("la division de ",a,"/",b,"=", a/b)
            sinon
              Afficher("erreurrr")
          fsi
    sinon Afficher("l'opérateur saisi est incorrecte")
  FinSelon
Fin
---------------------------------------------------------------------------------
---------------------------------------------------------------------------------
Programme exo12
Variables val, som, i :entier

Debut
  Afficher("Saisir une valeur de départ")
  lire(val)
  som <- 0
  Pour i <- 1 à val faire
    si(val mod i = 0) alors
      som <- som + i
    fsi
    si(som = val) alors
      i <- val
    fsi
  Fpour
  Afficher("le nombre : ",val,"est parfait")
Fin
-----------------------------------------------------------------------------------
-----------------------------------------------------------------------------------
Programme exo13
Variables j,m,a : entier

Debut
  Repeter
    Afficher("saisir la date sous format j/m/a")
    lire(j,m,a)
  jusqua((j>0 et j<31) et (m>0 et m<12) et (a>1900 et a<2999))
  si(m = 2 et j > 29) alors
    Afficher("la date saisie est invalide")
  fsi
  si((m = 4 ou m = 6 ou m = 9 ou m = 11) et j>30) alors
    Afficher("la date est invalide")
    sinon
      Afficher("la date : ",j,"/",m,"/",a," est valide")
  fsi
Fin
---------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------
Programme exo14
Variables j,m,a : entier

Debut
  Repeter
    Afficher("saisir la date sous format j/m/a")
    lire(j,m,a)
  jusqua((j>0 et j<31) et (m>0 et m<12) et (a>1900 et a<2999))
  si(a modulo 4 = 0) alors
    Afficher("l'annee est bissextile")
    sinon
      Afficher("l'annee n'est pas bissextile")
  fsi
Fin
------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------
Programme exo15
Var n,i,som   :entier

Debut
  Afficher("saisir un nombre de depart")
  lire(n)
  i <- 1
  som <- 0
  tq (i <= n) faire
    som <- som +i
    i <- i+1
  ftq
  Afficher("la somme des valeurs comprises entre 1 et le nombre saisit est :",som)
Fin
------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------
Programme exo15Moyenne
Var n,i,som  :entier
    moy      :reel

Debut
  Afficher("saisir un nombre de depart")
  lire(n)
  i <- 1
  som <- 0
  tq (i <= n) faire
    som <- som +i
    i <- i+1
  ftq
  moy <- som/n
  Afficher("la moyenne des valeurs est :",moy
Fin
------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------
Programme exo16
Variables a,b,q,i :entier

Debut
  Afficher("Entrer les valeurs a et b")
  lire(a,b)
  i <- a
  q <- 0
  tantque i >= b faire
    q <- q+1
    i <- i - b
  finTanque
  Afficher(a,"divise par ",b,"par soustraction successive est :",q,"et le reste est : "i)
Fin
----------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------
Programme exo19
Variables prixArticle, som, rep :entier

Debut
  Repeter
    Afficher("entrer le prix de l'article")
    lire(prixArticle)
    si(prixArticle mod 10 = 0 et prixArticle >=10) alors
      som <- som + prixArticle
      sinon
        Afficher("verifier le prix saisi")
    finsi
    Afficher("voulez vous saisir un autre prix d'article ? tapez 1 sui oui et 0 si non")
    lire(rep)
  jusqu'a(rep = 0 )

Fin
--------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------
Programme exo20
Variables tableau tab[10]: entier
          i,j,rang,max :entier

Debut
  Pour i <- 1 à 10 faire
    Afficher("saisir un nombre")
    lire(tab[i])
  Finpour
  Pour i <- 1 à 9 faire
    rang <- i
    max <- tab[rang]
    Pour j <- i+1 à 10 faire
      si(tab[j] > tab[i])
        max <- tab[j]
        rang <- j
      fsi
      j <- n
    fpour
  Fpour
  Afficher("le plus grand nombre des 10 valeurs est : ",max,"de rang",rang)
Fincccc
-------------------------------------------------------------------------------
-------------------------------------------------------------------------------
Programme exo21
Variables n,a,t :entier
Debut
  Afficher("saisir un nombre")
  lire(n)
  Afficher("devinne le nombre")
  lire(a)
  t <- 1
  tantque(a <> n) faire
  si(a>n) alors
      Afficher("plus grand")
  sinon 
      Afficher("plus petit")
  finsi
  t <- t+1
  Afficher("devinne le nombre ",t," eme tentative")
  lire(a)
  fintanque
Fin
----------------------------------------------------------------------------
----------------------------------------------------------------------------
Programme exo22



