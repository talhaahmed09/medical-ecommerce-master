<?php
	class Slideshow {
		public $id;
		public $imageName;
		public $status;
		public $title;
		public $caption;


		//hàm khởi tạo slideshow
		public function __construct($id, $imageName, $status, $title, $caption) {
			$this->id = $id;
			$this->imageName = $imageName;
			$this->status = $status;
			$this->title = $title;
			$this->caption = $caption;
		}


		//hàm thêm hoặc cập nhật slideshow
		public function saveSlideshow() {
			$slide = array(
				'Id' => $this->id,
				'status' => $this->status,
				'title' => $this->title,
				'caption' => $this->caption
				);
			$id = save('slideshow', $slide);
			if ($id > 0) {
				$imageName= 'slide-'.$id;
				$config = array(
						'name' => $imageName,
						'upload_path' => 'public/upload/slideshows/',
						'allowed_exts' => 'jpg|jpeg'
					);
				$image = upload($this->imageName, $config);
				if (!empty($image)) {
					$slide = array(
							'Id' => $id,
							'image_name' => $image
						);
					$id = save('slideshow', $slide);
				} 
			} else {
				return false;
			}
			return true;
		}


		//hàm xóa slideshow
		public function deleteSlideshow() {
			$id = $this->id;
			$slide = get_a_record('slideshow', $id);
			$imagePath = 'public/upload/slideshows/'.$slide['image_name'];
			if (is_file($imagePath)) {
        		unlink($imagePath);
        		delete('slideshow', $id);
        		return true;
   			} else {
   				return false;
   			}
		}
	}
	
?>