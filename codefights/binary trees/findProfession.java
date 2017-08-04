/*Consider a special family of Engineers and Doctors. This family has the following rules:

Everybody has two children.
The first child of an Engineer is an Engineer and the second child is a Doctor.
The first child of a Doctor is a Doctor and the second child is an Engineer.
All generations of Doctors and Engineers start with an Engineer.

Given the level and position of a person in the ancestor tree above, find the profession of the person.
Note: in this tree first child is considered as left child, second - as right.*/

public class findProfession {
	
	public static void main(String[] args) {
		System.out.println(new findProfession().find(3, 3)); //exptected output = Doctor
		System.out.println(new findProfession().find(4, 2)); //exptected output = Doctor
		System.out.println(new findProfession().find(8, 100)); //exptected output = Engineer
		System.out.println(new findProfession().find(17, 5921)); //exptected output = Doctor
		System.out.println(new findProfession().find(25, 16777216)); //exptected output = Engineer
	}

	String find(int level, int pos) {

	    String e = "Engineer";
	    String d = "Doctor";
	    
	    if (level == 1)
	        return e;
	    
	    if (level == 2)
	        if (pos == 1 || pos == -2)
	            return e;
	        else if (pos == 2 || pos == -1)
	            return d;
	        else
	            return "error";
	    
	    int half = (int)Math.pow(2, level-2);
	    
	    if (Math.abs(pos) > half) //if |pos| > half, move 2^(level-2) closer to 0
	        if (pos < 0) //this negative is used to track the inversion status of the pattern (1-2-2-1-2-1-1-2)
	            pos = Math.abs(pos + (int)Math.pow(2, level-2));
	        else
	            pos = 0 - pos + (int)Math.pow(2, level-2);
	    
	    return find(level-1, pos); //recursion until level == 2

	}

}