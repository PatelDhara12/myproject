<html>

#include<stdio.h>
#include<stdlib.h>

int count=0;

struct seat 
 int seatNo;
 struct seat *link;
} *first=NULL, *temp=NULL, *temp1=NULL, *save=NULL;

void create(int x) {
 temp=(struct seat*)malloc(sizeof(struct seat));
 temp->seatNo=x;
 temp->link=NULL;
}

int checkAvailability(int sno) {
 int flag=0;
 if (first==NULL)
  return flag;
 else {
  temp=first;
  while(temp!=NULL) {
   if (temp->seatNo<sno)
    temp=temp->link;
   else if (temp->seatNo==sno) { 
    flag=1; 
    break; 
   } 
   else
    break;
  }
 }
 return flag;
}

void bookTickets(int sno) {
 if (checkAvailability(sno)) {
  printf("\nSorry, seat %d has already been booked!",sno);
  return;
 }
 else {
  create(sno);
  if(first == NULL)
   first = temp;
  else if (first->seatNo > temp->seatNo) {
   temp->link = first;
   first = temp;
  }
  else {   
   temp1 = first;
   while((temp1 != NULL) && (temp1->seatNo < temp->seatNo)) {
    save = temp1;
    temp1 = temp1->link;
   }
   if (temp1 == NULL) {
    save->link = temp;
   } else {
    save->link = temp;
    temp->link = temp1;
   }
  }
  printf("\nSeat %d has been booked!",sno);
  count++;
 }
}

void display() {
 int i,j;
 printf("Cols:\t");
 for(i = 1; i <= 10; ++i)
  printf("%d\t",i);
 printf("\n");
 temp = first;
 for(i = 0; i <= 9; ++i) {
  printf("Row %d:  ", i);
  for(j = 1; j <= 10; ++j)
   if (temp != NULL && temp->seatNo == (10*i + j)) {
    printf("X\t");
    temp = temp->link;
   } else {
    printf("O\t");
   }
   printf("\n");
 }
}

int main() {
 int choice, seat_no, n, i;
 
 printf("\n\n***********************************************************\n");
 printf("WELCOME TO IMAX THEATRE ONLINE SEAT BOOKING SYSTEM");
 printf("\n***********************************************************\n");
 while(1) {
  printf("\n\nMENU FOR 10.00am SHOW OF JOKER\n1. Check availability of seats\n2. Book tickets\n3. Display seat matrix\n4. Exit\nEnter your choice: ");
  scanf("%d", &choice);
  switch(choice) {
   case 1: printf("\nEnter number of seats: ");
           scanf("%d",&n); 
           if(n < 100) {
	    printf("\nEnter seat numbers:");
            for(i = 0; i < n; ++i) {
             scanf("%d",&seat_no);
             if(checkAvailability(seat_no) == 0)
              printf("\nSeat %d is available!", seat_no);
             else
              printf("\nSeat %d is not available!", seat_no);
            }
           }
           else
            printf("\nError: Number of seats must be less than 100!");
           break;
   case 2: printf("\nEnter number of seats:");
           scanf("%d", &n); 
           if(count == 100) {
            printf("\nTheatre is full!");
            display();
            exit(0);
           }
           if((n <= 100) && ((100-count) >= n)) {
            printf("\nEnter seat numbers to be booked:");
            for(i = 0; i < n; ++i) {
             scanf("%d",&seat_no);
             bookTickets(seat_no);
            }
           }
           else if (n > 100)
            printf("\nError: Number of seats must be less than 100!");
           else
            printf("\nError: Number of seats to be booked is greater than number of available seats!");	
           break;
   case 3: display();
           break;
   case 4: exit(0);
   default: printf("\nInvalid choice!");
  }
 } 
 return 0;
}				

</html>