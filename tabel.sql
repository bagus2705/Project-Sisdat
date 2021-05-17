Create database rumahsakit;

Use rumahsakit;

Create table pasien(
id_pasien int not null auto_increment,
nama_pasien varchar(64) not null,
alamat varchar(255) not null,
jenis_kelamin varchar(16) not null,
Primary key(id_pasien)
);

Create table ruangan(
id_kamar int not null auto_increment,
nama_kamar varchar(64) not null,
tarif_kamar int not null,
jenis_kamar varchar(16) not null,
id_pasien int not null,
Primary key(id_kamar),
Foreign key(id_pasien) references pasien(id_pasien)
);

Create table poli(
id_poli int not null auto_increment,
jenis_poli varchar(16) not null,
id_pasien int not null,
Primary key(id_poli),
Foreign key(id_pasien) references pasien(id_pasien)
);

create table perawat(
id_perawat int not null auto_increment,
nama_perawat varchar(64) not null,
jam_jaga varchar(4) not null,
alamat varchar(255) not null,
id_pasien int not null,
Primary key(id_perawat),
Foreign key(id_pasien) references pasien(id_pasien)
);

Create table rekam_medis(
id_rekam_medis int not null auto_increment,
diagnosa varchar(64) not null,
keluhan varchar(64) not null,
cek_kondisi_fisik varchar(64) not null,
id_pasien int not null,
Primary key(id_rekam_medis),
Foreign key(id_pasien) references pasien(id_pasien)
);

Create table biaya(
id_biaya int not null auto_increment,
jumlah_biaya int not null,
tgl_bayar varchar(16) not null,
id_pasien int not null,
Primary key(id_biaya),
Foreign key(id_pasien) references pasien(id_pasien)
);

Create table dokter(
id_dokter int not null auto_increment,
nama_dokter varchar(64) not null,
no_hp_dokter varchar(16) not null,
spesialis varchar(16) not null,
id_pasien int not null,
Primary key (id_dokter),
Foreign key(id_pasien) references pasien(id_pasien)
);

create table resep_obat(
id_resep int not null auto_increment,
nama_resep varchar(64) not null,
nama_obat varchar(64) not null,
id_pasien int not null,
Primary key(id_resep),
Foreign key(id_pasien) references pasien(id_pasien)
);
