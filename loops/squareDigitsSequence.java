//Consider a sequence of numbers a0, a1, ..., an, in which an element is equal to the sum of squared digits of the previous element.
//The sequence ends once an element that has already been in the sequence appears again.
//Given the first element a0, find the length of the sequence.
import java.util.ArrayList;

public class squareDigitsSequence {
	
	public static void main(String[] args) {
		System.out.println(new squareDigitsSequence().test(16)); //expected output = 9
		System.out.println(new squareDigitsSequence().test(103)); //expected output = 4
		System.out.println(new squareDigitsSequence().test(1)); //expected output = 2
	}

	int test(int a0) {

	    boolean loop = true;
	    ArrayList<Integer> nums = new ArrayList<Integer>(); //list of numbers in sequence
	    int one, two, three;
	    int current = a0;
	    
	    while (loop) {
	        nums.add(current); //save current number
	        three = current / 100; //hundreds digit
	        two = current % 100 / 10; //tens digit
	        one = current % 100 % 10; //ones digit
	        current = (three*three) + (two*two) + (one*one); //math
	        for (int i : nums) //checks if new current number is already in sequence
	            if (i==current)
	                loop = false;
	    }
	    
	    return nums.size()+1; //nums array doesn't store the last element in the sequence

	}
    
}