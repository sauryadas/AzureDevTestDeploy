package com.microsoft.helloworld;


import java.util.ArrayList;
import java.util.Random;

/**
 * 
 */

/**
 * @author saudas
 *
 */
public class QuestionAndAnswer {

	static ArrayList<String> questionList = new ArrayList<String>();
	
	public static String getQuestion(){
		
		createQuestionSet();
		return questionList.get(randInt(0,4));
		
	}
	
	private static void createQuestionSet(){
	
		String question1 ="";
		String question2 ="";
		String question3 ="";
		String question4 ="";
		String question5 ="";
		
		question1 = question1 + "<br/><p>What color is the sky? </p>";
		question1 = question1 + "<br/><input type=\"radio\" name=\"question\" value=\"a\" > blue<br>";
        question1 = question1 + "<br/><input type=\"radio\" name=\"question\" value=\"b\" > yellow<br>";
        question1 = question1 + "<br/><input type=\"radio\" name=\"question\" value=\"c\" > azure<br>";
        question1 = question1 + "<br/><input type=\"hidden\" name=\"answer\" value=\"a\" ><br>";
        
        question2 = question2 + "<br/><p>Which is the best place to shop online? </p>";
        question2 = question2 + "<br/><input type=\"radio\" name=\"question\" value=\"a\" > jet<br>";
        question2 = question2 + "<br/><input type=\"radio\" name=\"question\" value=\"b\" > walmart<br>";
        question2 = question2 + "<br/><input type=\"radio\" name=\"question\" value=\"c\" > target<br>";
        question2 = question2 + "<br/><input type=\"hidden\" name=\"answer\" value=\"a\" ><br>";
        
        question3 = question3 + "<br/><p>Which company is the best cloud provider today? </p>";
        question3 = question3 + "<br/><input type=\"radio\" name=\"question\" value=\"a\" > GC<br>";
        question3 = question3 + "<br/><input type=\"radio\" name=\"question\" value=\"b\" > AWS<br>";
        question3 = question3 + "<br/><input type=\"radio\" name=\"question\" value=\"c\" > Azure<br>";
        question3 = question3 + "<br/><input type=\"hidden\" name=\"answer\" value=\"c\" ><br>";
        
        question4 = question4 + "<br/><p>Which is the tech capital of the world? </p>";
        question4 = question4 + "<br/><input type=\"radio\" name=\"question\" value=\"sfo\" > San Francisco<br>";
        question4 = question4 + "<br/><input type=\"radio\" name=\"question\" value=\"seattle\" > Seattle<br>";
        question4 = question4 + "<br/><input type=\"radio\" name=\"question\" value=\"nyc\" > New York City<br>";
        question4 = question4 + "<br/><input type=\"hidden\" name=\"answer\" value=\"a\" ><br>";
        
        question5 = question5 + "<br/><p>What is the best coffee in San Francisco? </p>";
        question5 = question5 + "<br/><input type=\"radio\" name=\"question\" value=\"a\" > Blue Bottle<br>";
        question5 = question5 + "<br/><input type=\"radio\" name=\"question\" value=\"b\" > Philz<br>";
        question5 = question5 + "<br/><input type=\"radio\" name=\"question\" value=\"c\" > Stumptown<br>";
        question5 = question5 + "<br/><input type=\"hidden\" name=\"answer\" value=\"b\" ><br>";
        
        questionList.add(question1);
        questionList.add(question2);
        questionList.add(question3);
        questionList.add(question4);
        questionList.add(question5);
	}
	
	public static int randInt(int min, int max) {

	    // Usually this can be a field rather than a method variable
	    Random rand = new Random();

	    // nextInt is normally exclusive of the top value,
	    // so add 1 to make it inclusive
	    int randomNum = rand.nextInt((max - min) + 1) + min;

	    return randomNum;
	}
	
}

