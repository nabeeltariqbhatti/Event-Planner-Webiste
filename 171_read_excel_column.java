class Solution {
    public int titleToNumber(String columnTitle) {
        
        int answer=0;
        int pow=0;
        
        for(int i=columnTitle.length()-1; i>=0; --i){
            
            char c = columnTitle.charAt(i);
            
            int val =(int)c - 65 +1;
            System.out.println(val);
            
            answer += val*Math.pow(26, pow);
            
            pow++;
        }
        return answer;
    }
}
