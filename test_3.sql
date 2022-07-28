CREATE TABLE karyawan(
    id_karyawan INT(11) AUTO_INCREMENT PRIMARY KEY,
    nik VARCHAR(10) UNIQUE,
    nama VARCHAR(100),
    ttl DATE,
    alamat TEXT,
    id_jabatan INT(11),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE jabatan(
    id_jabatan INT(11) AUTO_INCREMENT PRIMARY KEY,
    nama_jabatan VARCHAR(100), 
    id_level INT(11),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP	
);

CREATE TABLE level(
   id_level INT(11) AUTO_INCREMENT PRIMARY KEY,
   nama_level VARCHAR(100),
   id_dept INT(11),
   created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
   updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP	
);

CREATE TABLE department(
   id_dept INT(11) AUTO_INCREMENT PRIMARY KEY,
   nama_dept VARCHAR(100),
   created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
   updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP	
);

INSERT INTO karyawan(id_karyawan, nik, nama, ttl,alamat,id_jabatan) VALUES (NULL, '123', 'Dimas', '1994-09-02', 'Cawang Jakarta Timur', 1 );
INSERT INTO karyawan(id_karyawan, nik, nama, ttl,alamat,id_jabatan) VALUES (NULL, '456', 'Justin', '2000-01-05', 'Tebet Jakarta Selatan', 2 );
INSERT INTO karyawan(id_karyawan, nik, nama, ttl,alamat,id_jabatan) VALUES (NULL, '789', 'Diki', '1992-07-08', 'Kemanggisan Jakarta Barat', 3 );

INSERT INTO jabatan(id_jabatan, nama_jabatan, id_level) VALUES (NULL, 'CTO', 1);
INSERT INTO jabatan(id_jabatan, nama_jabatan, id_level) VALUES (NULL, 'Developer Manager', 2);
INSERT INTO jabatan(id_jabatan, nama_jabatan, id_level) VALUES (NULL, 'Supervisor', 3);

INSERT INTO level(id_level, nama_level) VALUES (NULL, 'Top Management');
INSERT INTO level(id_level, nama_level) VALUES (NULL, 'Middle Management');
INSERT INTO level(id_level, nama_level) VALUES (NULL, 'First Line Management');

INSERT INTO department(id_dept, nama_dept) VALUES (NULL, 'Technology');
INSERT INTO department(id_dept, nama_dept) VALUES (NULL, 'Accounting & Finance');
INSERT INTO department(id_dept, nama_dept) VALUES (NULL, 'HR & GA');


SELECT karyawan.nama, jabatan.nama_jabatan, level.nama_level, department.nama_dept FROM karyawan 
LEFT JOIN jabatan ON karyawan.id_jabatan = jabatan.id_jabatan
LEFT JOIN level ON jabatan.id_level = level.id_level
LEFT JOIN department on level.id_dept = department.id_dept;

UPDATE karyawan SET nama = "david" WHERE id_karyawan = 1 ;

DELETE FROM karyawan WHERE id_karyawan = 2 ;