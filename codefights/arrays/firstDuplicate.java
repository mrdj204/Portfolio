/*Given an array a that contains only numbers in the range from 1 to a.length, find the first duplicate number for which the second occurrence has the minimal index. In other words, if there are more than 1 duplicated numbers, return the number for which the second occurrence has a smaller index than the second occurrence of the other number does. If there are no such elements, return -1.

Write a solution with O(n) time complexity and O(1) additional space complexity.*/

public class firstDuplicate {
	
	public static void main(String[] args) {
		System.out.println(new firstDuplicate().dupeFind(new int[]{2, 3, 3, 1, 5, 2})); //expected output = 3
		System.out.println(new firstDuplicate().dupeFind(new int[]{2, 4, 3, 5, 1})); //expected output = -1
		System.out.println(new firstDuplicate().dupeFind(new int[]{8, 1, 4, 8, 10, 1, 5, 7, 8, 7})); //expected output = 8
		//expected output = 16
		System.out.println(new firstDuplicate().dupeFind(new int[]{16, 25, 69, 4, 99, 29, 16, 54, 75, 34, 7, 63, 11, 44, 9, 31, 70, 21, 70, 64, 64, 53, 24, 45, 61, 34, 33, 52, 13, 55, 68, 80, 89, 10, 10, 92, 60, 55, 22, 75, 23, 22, 16, 62, 84, 45, 86, 4, 85, 58, 69, 33, 39, 72, 23, 79, 19, 62, 32, 5, 53, 70, 51, 11, 84, 88, 18, 65, 99, 29, 56, 96, 76, 93, 16, 28, 31, 89, 1, 3, 4, 5, 88, 99, 28, 39, 52, 13, 6, 94, 86, 65, 57, 94, 55, 40, 98, 39, 19, 8})); 
		System.out.println(new firstDuplicate().dupeFind(new int[]{2, 1})); //expected output = -1
	}

	int dupeFind(int[] a) {
	    
	    int[] test = new int[a.length];

	    for (int i : a) //loop through every int
	        if (test[i-1] == i) //if int already found, return it
	            return i;
	        else
	            test[i-1] = i; //else save int into test array
	    
	    return -1;
	    
	}

}