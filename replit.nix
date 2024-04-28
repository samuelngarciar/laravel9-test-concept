{ pkgs }: {
	deps = [
   pkgs.docker
   pkgs.nano
		pkgs.php80
        pkgs.php80Packages.composer
	];
}