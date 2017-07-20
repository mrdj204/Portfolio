//Find the number of ways to express n as sum of some (at least two) consecutive positive integers.

public class sumOfConsecutive2 {
	
	public static void main(String[] args) {
		System.out.println(new sumOfConsecutive2().isSumOfConsecutive2(15)); //expected output = 3
		System.out.println(new sumOfConsecutive2().isSumOfConsecutive2(8)); //expected output = 0
		System.out.println(new sumOfConsecutive2().isSumOfConsecutive2(9)); //expected output = 2
	}

	int isSumOfConsecutive2(int n) {

	    int counter = 0;
	    for (int i=1; i<=n/2; i++) { //loops through all possible start points
	        int test = i + i+1; //sets test to first 2 consecutive ints
	        int j = i+2; //sets j to third int
	        while (test < n)
	            test += j++; //adds next int to test and increments j for next loop
	        if (test == n)
	            counter++;  //increments if this is a valid start point
	    } 
	    
	    return counter;
	    
	}

}