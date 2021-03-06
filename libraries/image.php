<? php

class Image{

	protected $image;
	protected $width;
	protected $height;
	protected $minetype;


	public function __construct($filename){
			$fb = fopen($filename, 'rb') or die("Image '$filename' not found!");
			$buf .= fgets($fb, 4096);

		$this->image = imagecreatefromstring($buf);

		$info 				=getimagesize($filename)
		$this ->width 		= $info[0];
		$this ->height 		= $info[1]
		$this ->mimetype 	= $info['mime'];	



	}

	public function display() {
			header("Content-type: {$this->mimetype}");
			switch ($this->mimetype) {
				case 'image/jpeg':
					imagejpeg($this->image);
					break;
				case 'image/png':
					imagepng($this->image);
					break;

				case 'image/gif':
					imagegif($this->image);
					break;	
				
				
			}


	}
	public function resize($width,$height){
			$thumb = imagecreatetruecolor($width, $height);
			imagecopyresampled($thumb, $this->, 0, 0, 0, 0, $width, $height, $this->width, $this->height);
			$this->image = $thumb;



	}



} #eoc
?>