DROP TRIGGER IF EXISTS `bit_carr_ins`;
DELIMITER //
CREATE TRIGGER `bitacora` AFTER INSERT ON `cat_alma`
FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, modificado, tabla) VALUES (SUBSTRING(USER(), (INSTR(USER(),`@`)+1)), SUBSTRING(USER(),1,(instr(user(),`@`)-1)), `INSERTAR`, NOW(), `cat_alma`)


DROP TRIGGER IF EXISTS `bit_carr_upd`;
CREATE TRIGGER `bit_carr_upd` AFTER UPDATE ON `cat_alma`
FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, modificado, tabla) VALUES (SUBSTRING(USER(), (INSTR(USER(),'@')+1)), SUBSTRING(USER(),1,(instr(user(),'@')-1)), "ACTUALIZAR", NOW(), `categoria`)


DROP TRIGGER IF EXISTS `bit_carr_del`;
CREATE TRIGGER `bit_carr_del` AFTER DELETE ON `cat_alma`
FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, modificado, tabla) VALUES (SUBSTRING(USER(), (INSTR(USER(),'@')+1)), SUBSTRING(USER(),1,(instr(user(),'@')-1)), “ELIMINAR", NOW(), `categoria`)



DROP TRIGGER IF EXISTS `bit_prese_ins`;
DELIMITER //
CREATE TRIGGER `bit_prese_ins` AFTER INSERT ON `pres_alma`
FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, modificado, tabla) VALUES (SUBSTRING(USER(), (INSTR(USER(),'@')+1)), SUBSTRING(USER(),1,(instr(user(),'@')-1)), "INSERTAR", NOW(), `pres_alma`)


DROP TRIGGER IF EXISTS `bit_prese_upd`;
CREATE TRIGGER `bit_prese_upd` AFTER UPDATE ON `pres_alma`
FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, modificado, tabla) VALUES (SUBSTRING(USER(), (INSTR(USER(),'@')+1)), SUBSTRING(USER(),1,(instr(user(),'@')-1)), "ACTUALIZAR", NOW(), `pres_alma`)


DROP TRIGGER IF EXISTS `bit_prese_del`;
CREATE TRIGGER `bit_prese_del` AFTER DELETE ON `pres_alma`
FOR EACH ROW INSERT INTO bitacora(host, usuario, operacion, modificado, tabla) VALUES (SUBSTRING(USER(), (INSTR(USER(),'@')+1)), SUBSTRING(USER(),1,(instr(user(),'@')-1)), "ELIMINAR", NOW(), `pres_alma`)
