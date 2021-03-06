<?php
class Dash extends BaseModel {
	
	// 数据库表名
	static $table_name = 'mlxx_dash';
	
	/**
	 * 项目定义
	 */
	// 发布者代码
	static $class_code;
	// 标题日期
	static $title_date;
	// 天气代码
	static $weather_code;
	// 标题
	static $title;
	// 标题时间
	static $title_time;
	// 公告内容
	static $content;
	// 喜欢数
	static $likes;
	// 评论数
	static $comments;
	// 分享数
	static $shares;
	
	// 用户可提交的项目定义
	static $attr_accessible = array (
			'class_code',
			'title_date',
			'weather_code',
			'title',
			'title_time',
			'content',
			'modify_user_id' 
	);
	
	/**
	 * 关联关系
	 */
	static $has_many = array (
			// 公告照片
			array (
					'photos',
					'class_name' => 'DashPhoto',
					'foreign_key' => 'dash_id',
					'order' => 'id asc' 
			),
			// 公告视频
			array (
					'videos',
					'class_name' => 'DashVideo',
					'foreign_key' => 'dash_id',
					'order' => 'id asc' 
			) 
	);
	
	/**
	 * 项目验证
	 */
	// 必须
	static $validates_presence_of = array (
			array (
					'class_code' 
			),
			array (
					'title_date' 
			),
			array (
					'title' 
			),
			array (
					'title_time' 
			),
			array (
					'content' 
			),
			array (
					'modify_user_id' 
			) 
	);
}
?>
