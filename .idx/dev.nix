{ pkgs, ... }: {
  channel = "stable-23.11";

  packages = [
    pkgs.nodejs_20
    pkgs.python3
    pkgs.php81
    pkgs.php81Packages.composer
  ];
services.mysql = {
  enable = true;
  package = pkgs.mysql80;
};
  env = {};

  idx = {
    extensions = [];
    previews = {
      enable = true;
      previews = {
        web = {
          command = ["php" "-S" "0.0.0.0:$PORT" "-t" "/home/user/prueba"];
          manager = "web";
        };
      };
    };

    workspace = {
      onCreate = {
        composer-install = "composer install";
        default.openFiles = [ "index.php" "style.css" ];
      };
      onStart = {
        start-server = "php -S 0.0.0.0:8000 -t ./public";
      };
    };
  };
}
