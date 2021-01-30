create table posts
(
    id int(11) not null AUTO_INCREMENT,
    subject varchar (128) not null,
    content varchar(1000) not null,
    date datetime not null,
    constraint pk_posts_id PRIMARY KEY (id)
    
);


insert into posts (subject,content,date) values ('This is the subject','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc consectetur a enim in laoreet. Duis nisl ante, ultrices ac mi quis, rutrum sodales dolor. Etiam ultricies vestibulum nunc in scelerisque. In ac ornare nulla, vitae finibus dolor. Proin ut nisl felis. Curabitur dapibus eu magna vitae hendrerit. Ut in nibh et nisi faucibus vulputate.','2015-11-14 16:38:01');
insert into users (firstName,lastName,email,uid,pwd) values ('alvin','lal','alvinzzz2001@gmail.com','admin','test123')