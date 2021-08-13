# db選定
use test_db;

# 削除(子から)
drop table stocks;
drop table products;
drop table shops;
drop table prefs;

# products tableの作成
create table mst_products (
	id int(10) unsigned primary key auto_increment,
	name varchar(20) not null,
  delete_flg int(1) default 0 not null,
  updated_at timestamp default current_timestamp on update current_timestamp,
  updated_by varchar(20) not null
);

# prefs tableの作成
create table mst_prefs (
	id int(2) unsigned primary key auto_increment,
	name varchar(10) not null,
  delete_flg int(1) default 0 not null,
  updated_at timestamp default current_timestamp on update current_timestamp,
  updated_by varchar(20) not null
);

# shops tableの作成
create table mst_shops (
	id int(10) unsigned primary key auto_increment,
	name varchar(50) not null,
	pref_id int(2) not null,
  delete_flg int(1) default 0 not null,
  updated_at timestamp default current_timestamp on update current_timestamp,
  updated_by varchar(20) not null,
  constraint fk_pref_id
	foreign key (pref_id)
	references mst_prefs(id)
	on update cascade
);

# stocks tableの作成
create table txn_stocks (
	product_id int(10) unsigned,
	shop_id int(10) unsigned,
  amount int(10) unsigned not null,
  delete_flg int(1) default 0 not null,
  updated_at timestamp default current_timestamp on update current_timestamp,
  updated_by varchar(20) not null,
	primary key(product_id,shop_id),
    constraint fk_product_id
    foreign key (product_id)
    references mst_products(id)
    on update cascade
	constraint fk_shop_id
    foreign key (shop_id)
    references mst_shops(id)
    on update cascade
);

