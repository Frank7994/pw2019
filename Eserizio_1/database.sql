drop table if exists prodotti;

create table prodotti (
prodotto character (20) primary key,
tipologia character (20) not null,
stagione character (20) not null
);
 
insert into prodotti (prodotto,tipologia,stagione) values ('mela','frutta','autunno');
insert into prodotti (prodotto,tipologia,stagione) values ('pera','frutta','primavera');
insert into prodotti (prodotto,tipologia,stagione) values ('anguria','frutta','estate');
insert into prodotti (prodotto,tipologia,stagione) values ('mandarini','frutta','inverno');
insert into prodotti (prodotto,tipologia,stagione) values ('carota','verdura','autunno');
insert into prodotti (prodotto,tipologia,stagione) values ('cicoria','verdura','inverno');
insert into prodotti (prodotto,tipologia,stagione) values ('asparagi','verdura','primavera');
insert into prodotti (prodotto,tipologia,stagione) values ('zucchine','verdura','estate');


select prodotto from prodotti where stagione='inverno' and tipologia ='frutta';
select prodotto from prodotti where stagione='estate' and tipologia ='verdura';