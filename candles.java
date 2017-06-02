public class candles {
	
	public static void main(String[] args) {
		System.out.println(new candles().count(5,2)); //expected output = 9
		System.out.println(new candles().count(1,2)); //expected output = 1
		System.out.println(new candles().count(3,3)); //expected output = 4
		System.out.println(new candles().count(11,3)); //expected output = 16
	}

	/*When a candle finishes burning it leaves a leftover. [makeNew] leftovers can be combined to make a new candle, which, when burning down, will in turn leave another leftover.
	You have [candlesNumber] candles in your possession. What's the total number of candles you can burn, assuming that you create new candles as soon as you have enough leftovers?*/

	int count(int candlesNumber, int makeNew) {
	    int burned = 0, leftover = 0;
	    while (candlesNumber > 0) {
	        burned += candlesNumber; //count how many candles made
	        leftover += candlesNumber; //count leftovers
	        candlesNumber = leftover / makeNew; //set to number of candles that can be made
	        leftover = leftover % makeNew; //leaves the leftover candles for next wave of leftovers
	    }
	    return burned;
	}

}