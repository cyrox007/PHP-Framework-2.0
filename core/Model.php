<?php
    namespace Core;

    class Model {
        private static $link;

        public __construct () {
            if (!self::$link) { // если свойство не задано, то подключаемся
				self::$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
				mysqli_query(self::$link, "SET NAMES 'utf8'");
			}
        }
    }