create table productos(
    id_producto integer primary key autoincrement,
    producto varchar(30) not null,
    precio int(3) not null,
    existencia int(4) not null
);

insert into productos (producto, precio, existencia) values
('FABULOSO','25','300'),
('CHETOS FLAMINGHOT','9','15'),
('JABON CORPORAL','15','50'),
('TUPSIPOP','5','50'),
('SOPAS','3','100'),
('JABON DE POLVO','19','70'),
('MATEQUILLA','9','70'),
('COCA COLA','38','13');


create table tickets(
       idticket integer  not null primary key AUTOINCREMENT not null,
       fecha_hora TIMESTAMP DEFAULT CURRENT_TIMESTAMP not null,
       cantidad_producto varchar (5) not null , 
       producto varchar (30) not null ,
       total_producto  integer not null
);

insert into tickets (cantidad_producto, producto, total_producto) values 
('1','FABULOSO','299');