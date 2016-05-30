<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct(){
					parent::__construct();
	        $this->load->model("cms_model");
	}
	public function index()
	{
		if ($query = $this->cms_model->get_home()) {
			$data['content'] = $query;
		}
		$this->load->view('client/home_view',$data);
	}

	public function about()
	{
    if ($query = $this->cms_model->get_about()) {
        $data['content'] = $query;
      }
		$this->load->view('client/about_view', $data);
	}

	public function contact()
	{
		if ($query = $this->cms_model->get_contacts()) {
			$data['content'] = $query;
		}
		$this->load->view('client/contact_view', $data);
	}
	public function calculator()
	{
		  $this->load->helper('url');
		$this->load->view('client/calculator');
	}
	public function register()
	{
		$this->load->view('client/registration_view');
	}
	public function bmi_calculator()
	{
		$this->load->view('client/bmi_calculator');
	}

	public function tips_and_suggestions()
	{
		$this->load->view('client/dashboard_view');
	}

  public function check_bmi($bmi_result){

    if($bmi_result < 18.5){
			$data = array(
      'title' =>  "BMI is equal to or less than 18.5 (Underweight)
									A lean BMI can indicate that your weight maybe too low. You should consult your physician to determine if you should gain weight,
									as low body mass can decrease your body's immune system, which could lead to ilness such as disappearance of periods (women), bone
									loss, malnutrition and other conditions. The lower your BMI the greater these risks become.",
      'tips' =>  "<br/> TIPS <br/> he best way to add weight is to increase your intake of complex carbohydrates, particularly whole grain ones.
									Foods like whole wheat bread, muffins, pasta, crackers, and bagels are good to include. Also, legumes and fruits would be wise choices.
									In order to gain weight, you will have to eat more calories. You will need to include regular exercise and strength training into your
									lifestyle in order to prevent gaining too much weight as fat. And, as I mentioned, those extra calories should come mainly from additional
									carbohydrate.
									To start, set up a realistic goal weight for yourself. You may need to resign yourself to a less than (what you may consider) an
									ideal weight. Make good nutrition your priority, and weight gain the second.
									It is best to gain weight slowly and steadily. This will help to ensure that your weight gain is in the form of lean body mass and not excessive fat. Don't try to gain more than 1/2 pound a week.
									Some more tips
									Drink 6-8 glasses of distilled water a day.
									Eat frequent but small meals.
									Eat lots of raw fruits and vegetables (green leafy vegetables are great)
									Do not drink coffee, alcohol, soda pop,...
									Do not eat processed foods; white sugar, white flower,...
									Avoid red meat and animal fats.
									Reduce intake of dairy products.
									Do not smoke and avoid second hand smoke.");
    }else if($bmi_result > 18.5 && $bmi_result < 25){

			$data = array(
      'title' =>  "BMI is between 18.5 and 24.9 (Normal Weight)
									People whose BMI is within 18.5 to 24.9 possess the ideal amount of body weight, associated with living longest, the lowest incidence
									of serious ilness, as well as being perceived as more physically attractive than people with BMI in higher or lower ranges. However, it
									may be a good idea to check your Waist Circumference and keep it within the recommended limits.",
			"tips"  =>  "Keep it Up!");

    }else if($bmi_result >= 25 && $bmi_result < 30){

			$data = array(
      'title' =>  "BMI is between 25 and 29.9 (Overweight)
									 People falling in this BMI range are considered overweight and would benefit from finding healthy ways to lower their weight, such as diet and
									 exercise. Individuals who fall in this range are at increased risk for a variety of ilnesses. If your BMI is 27-29.99 your risk of health
									 problems becomes higher. In a recent study an increased rate of blood pressure, diabetes and heart disease was recorded at 27.3 for women and
									 27.8 for men. It may be a good idea to check your Waist Circumference and compare it with the recommended limits.",
			"tips"  =>  "<br/> TIPS <br/> Your body weight is controlled by the number of calories you eat and the number of calories you use each day. So, if you
										consume fewer calories than you burn, you will lose weight. You can do this by becoming more physically active or by eating less.
										You didn't put on extra weight overnight so it is equally unrealistic to take it off quickly. Record a goal that you can reach in one month
										that is 4 to 8 pounds less than you weigh now. Set a goal you know you can achieve.
										Here are some very simple changes that you can start today that will greatly improve your chances of weight loss success:
										Eliminate Red Meat
										If foods like burgers are basic to your current diet, cutting out red meat can go a long way in helping you make healthier meal choices.
										Build your meals around fish or poultry.
										Cut out fried foods
										Grill, bake, roast, broil or boil your food. This also means doing without French Fries and snack foods like Potato Strings, Chips,...
										Start with a soup or a salad
										By starting dinner with a soup or salad, you will curb your hunger, which will in turn help you keep portion sizes in check and prevent you
										from overeating.
										Stop Cola consumption
										For every 20 ounces of Coca-Cola you drink, you're consuming 250 calories. If you're trying to consume around 1500 calories a day in order to
										lose weight, you can blow your entire calorie budget on soda!
										Drink water
										Reach for the goal of eight glasses a day. Even if you don't drink eight, you're drinking more than usual.");
    }else if($bmi_result >= 30 && $bmi_result < 35){

			$data = array(
      'title' =>  "BMI is between 30-34.99 (Obese Class 1)
									 Individuals with a BMI of 30-34.99 are in a physically unhealthy condition, which puts them at risk for serious ilnesses such as heart disease,
									 diabetes, high blood pressure, gall bladder disease, and some cancers. This holds especially true if you have a larger than recommended Waist Size.
									 These people would benefit greatly by modifying their lifestyle. Ideally, see your doctor and consider reducing your weight by 5-10 percent.
									 Such a weight reduction will result in considerable health improvements.",
			"tips"  =>  "<br/> TIPS <br/>The method of treatment depends on your level of obesity, overall health condition, and motivation to lose weight.
										Treatment includes a combination of diet, exercise, behavior modification, and sometimes weightloss drugs. In some cases of severe obesity,
										gastrointestinal surgery may be recommended.
										If you are overweight, losing as little as 7-10 percent of your body weight may improve many of the problems linked to being overweight,
										such as high blood pressure and diabetes.
										Slow and steady weight loss of no more than 1-2 pounds per week is the safest way to lose weight. Too rapid weight loss can cause you to
										lose muscle rather than fat. It also increases your chances of developing other problems, such as gallstones and nutrient deficiencies.
										Making long-term changes in your eating and physical activity habits is the only way to lose weight and keep it off!
										Whether you are trying to lose weight or maintain your weight, you must improve your eating habits. Eat a variety of foods, especially pasta,
										rice, wholemeal bread, and other whole-grain foods. Reduce your fat-intake. You should also eat lots of fruits and vegetables.
										Making physical activity a part of your daily life is an important way to help control your weight. Try to do at least 30 minutes of physical
										activity a day on most days of the week. The activity does not have to be done all at once. It can be done in stages: 10 minutes here,
										20 minutes there, providing it adds up to 30 minutes a day.");

}else if($bmi_result >= 35 && $bmi_result < 40){

	$data = array(
	'title' =>  "BMI is between 35-39.99 (Obese Class 2)
							If you have a BMI of 35-39.99 your risk of weight-related health problems and even death, is severe. See your doctor and reduce your weight to a
							lower BMI.",

   "tips"  =>  "<br/> TIPS <br/> The method of treatment depends on your level of obesity, overall health condition, and motivation to lose weight.
	 						Treatment includes a combination of diet, exercise, behavior modification, and sometimes weightloss drugs. In some cases of severe obesity,
							gastrointestinal surgery may be recommended.
							If you are overweight, losing as little as 7-10 percent of your body weight may improve many of the problems linked to being overweight,
							such as high blood pressure and diabetes.
							Slow and steady weight loss of no more than 1-2 pounds per week is the safest way to lose weight. Too rapid weight loss can cause you to lose
							muscle rather than fat. It also increases your chances of developing other problems, such as gallstones and nutrient deficiencies. Making long-term
							changes in your eating and physical activity habits is the only way to lose weight and keep it off!
							Whether you are trying to lose weight or maintain your weight, you must improve your eating habits. Eat a variety of foods, especially pasta, rice,
							wholemeal bread, and other whole-grain foods. Reduce your fat-intake. You should also eat lots of fruits and vegetables.
							Making physical activity a part of your daily life is an important way to help control your weight. Try to do at least 30 minutes of physical
							activity a day on most days of the week. The activity does not have to be done all at once. It can be done in stages: 10 minutes here, 20 minutes
							there, providing it adds up to 30 minutes a day.");
    }else{
			$data = array(
			'title' =>  "BMI is over 40 (Obese Class 3 : Morbid Obesity)
									With a BMI of 40+ you have an extremely high risk of weight-related disease and premature death.
									Indeed, you may have already been suffering from a weight-related condition. For the sake of your health it is very important to see your doctor
									and get specialists help for your condition.",
   		"tips"  =>  "<br/> TIPS <br/> The method of treatment depends on your level of obesity, overall health condition, and motivation to lose weight.
									Treatment includes a combination of diet, exercise, behavior modification, and sometimes weightloss drugs. In some cases of severe obesity,
									gastrointestinal surgery may be recommended.
									If you are overweight, losing as little as 7-10 percent of your body weight may improve many of the problems linked to being overweight, such as high blood pressure and diabetes.
									Slow and steady weight loss of no more than 1-2 pounds per week is the safest way to lose weight. Too rapid weight loss can cause you to lose muscle rather than fat. It also increases your chances of developing other problems, such as gallstones and nutrient deficiencies. Making long-term changes in your eating and physical activity habits is the only way to lose weight and keep it off!
									Whether you are trying to lose weight or maintain your weight, you must improve your eating habits. Eat a variety of foods, especially pasta, rice, wholemeal bread, and other whole-grain foods. Reduce your fat-intake. You should also eat lots of fruits and vegetables.
									Making physical activity a part of your daily life is an important way to help control your weight. Try to do at least 30 minutes of physical
									activity a day on most days of the week. The activity does not have to be done all at once. It can be done in stages: 10 minutes here, 20 minutes
									there, providing it adds up to 30 minutes a day.");
    }

		$this->load->view('client/bmi_result',$data);
  }
  public function imperial_result()
	{
    $lbs = $this->input->get('pounds');
    $ft =  $this->input->get('foot');
    $inch =  $this->input->get('inch');

    $inches = ($ft * 12) + $inch;
    $inch2 = $inches * $inches;
    $result1 = ($lbs /$inch2) * 703;
    echo $result1, "   ";
    $this->check_bmi($result1);

		//$this->load->view('client/bmi_result');
	}
  public function metric_result()
	{
    $kg = $this->input->get('kilogram');
    $m =  $this->input->get('meters');
    $meters =  $m * $m;
    $result = $kg / $meters;
    echo $result, "   ";
    $this->check_bmi($result);
		//$this->load->view('client/bmi_result');
	}


}
