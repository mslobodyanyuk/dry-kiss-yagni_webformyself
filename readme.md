DRY, KISS, YAGNI principles
===========================

* ***Actions on the deployment of the project:***

- Making a new project dry-kiss-yagni_webformyself.loc:
																	
sudo chmod -R 777 /var/www/DRY-KISS-YAGNI/dry-kiss-yagni_webformyself.loc

//!!!! .conf
sudo cp /etc/apache2/sites-available/test.loc.conf /etc/apache2/sites-available/dry-kiss-yagni_webformyself.loc.conf
		
sudo nano /etc/apache2/sites-available/dry-kiss-yagni_webformyself.loc.conf

sudo a2ensite dry-kiss-yagni_webformyself.loc.conf

sudo systemctl restart apache2

sudo nano /etc/hosts

cd /var/www/DRY-KISS-YAGNI/dry-kiss-yagni_webformyself.loc

- Deploy project:

	`git clone << >>`

---

WebForMySelf

[Three key principles of good code DRY, KISS, YAGNI (32:05)]( https://www.youtube.com/watch?v=CBUkjUhKXSw&ab_channel=WebForMySelf )

Source codes for the lesson here:
<https://webformyself.com/tri-klyuchevyx-principa-xoroshego-koda-dry-kiss-yagni/>

_This lesson is a logical continuation of the previously released video cycle based on the SOLID principles, the observance of which makes it possible to correctly design the architecture of the project being created.
The principles that will be considered today, in fact, do not impose any definitions on the general structure and interaction between classes - their goal is the correct organization of all project code._

_I would like to note that, apart from any specific project, it is difficult to say exactly how you need to organize the code so that it would be "good", since everything depends on the tasks.
But, adherence to the three key principles DRY, KISS, YAGNI is a pretty big and confident step towards good code._

_DRY – Don’t repeat yourself – the principle encourages you not to repeat yourself when writing code. Everything that you write in the project must be defined only once._

---

_KISS – keep it short simple – make things easier. Sometimes the most correct solution is the simplest implementation of the task, in which there is nothing superfluous._

---

_YAGNI - You ain’t gonna need it – you don't need this. Everything that is not provided for by the project's terms of reference should not be in it._

KISS
====

_KISS – keep it short simple – make things easier. Sometimes the most correct solution is the simplest implementation of the task, in which there is nothing superfluous._

[(1:10)]( https://youtu.be/CBUkjUhKXSw?t=70 ) KISS - The code that you write should NOT only perform the real task, but also be very simple and understandable. And most importantly - short.

[(2:50)]( https://youtu.be/CBUkjUhKXSw?t=170 ) When solving a specific Problem, try to solve it as simple and short as possible.

[(9:15)]( https://youtu.be/CBUkjUhKXSw?t=555 ) The KISS principle says that you need to make it shorter and easier, then in fact it kind of tells you to split your project into many small pieces.

[(9:35)]( https://youtu.be/CBUkjUhKXSw?t=575 ) That is, IF you have a large Problem that needs to be solved, then it is advisable NOT to write EVERYTHING in one file `index.php`. - You can split the code into several specific pieces,
arrange each piece with a separate function that will solve one specific simple Problem. And accordingly, your code will contain a certain sequence of calls to certain functions.

Each function will solve one specific Problem. - Again, IF the function contains more than `100` lines, or I would even say, more than `60-70` lines, then it makes sense to think about and possibly break this function into
several sub-functions. The same is true for class methods. Try to keep your code simpler and shorter, which means your functions and methods are simpler and shorter. And in this way you will approach this principle, the KISS principle.  

DRY
===

_DRY – Don’t repeat yourself – the principle encourages you not to repeat yourself when writing code. Everything that you write in the project must be defined only once._

[(11:55)]( https://youtu.be/CBUkjUhKXSw?t=715 ) The DRY principle - "Don’t repeat yourself." - That is, DO NOT repeat yourself OR DO NOT repeat yourself at all. - What does this mean, when creating a code, forming some kind of program logic, you DO NOT need to repeat yourself in anything at all.
That is, the code that you write, those logical chains, methods, modules must be written exactly once and called already depending on certain conditions.

[(15:10)]( https://youtu.be/CBUkjUhKXSw?t=910 ) Calling the function several times, we can say that we use `"copy-paste"`, BUT we DO NOT repeat the implementation, we repeat the call to execute a specific function, a specific module, a method of some object, etc.
The DRY principle indicates that we should NOT repeat ourselves in the implementation of any functionality.

[(16:10)]( https://youtu.be/CBUkjUhKXSw?t=970 ) In an ideal system, project, each logical part, each functional element, as it were, collects, encapsulates its data either in a view, or in a specific variable, or in some property of an object.
Each component of your project is part of a larger component, and so on. By creating a kind of hierarchy. Thus, a kind of architecture is formed.

[(18:40)]( https://youtu.be/CBUkjUhKXSw?t=1120 ) I would say that DRY is a kind of philosophy that says that you need to divide the logic of your project into several functional parts. So IF you are very competent, very correct
divide into separate pieces, modules, then one way or another you can use them in other specific conditions.

[(19:45)]( https://youtu.be/CBUkjUhKXSw?t=1185 ) At the same time, such a fairly simple principle - DO NOT repeat yourself, requires very good planning and thinking about a specific project...

YAGNI
=====

_YAGNI - You ain’t gonna need it - you don't need it._ 

[(22:00)]( https://youtu.be/CBUkjUhKXSw?t=1320 ) - That is, this principle states that you DO NOT need to use in the project those elements that are NOT needed for this project.

[(26:45)]( https://youtu.be/CBUkjUhKXSw?t=1605 ) The YAGNI principle just says, DO NOT do what will NOT be used. Based on this principle, you only need to do what is necessary.
Describe only the functionality that is needed. And accordingly, define only those modules that are necessary for the current functionality to work.

[(27:20)]( https://youtu.be/CBUkjUhKXSw?t=1640 ) A classic example. - As a rule, when we work with a database, we quite often use a certain layer, a certain abstraction for working with databases
data. Moreover, this abstraction is written in such a way that this abstract module for working with databases can work with both the `MySQL` database and the database
`SQLite` data, as well as with absolutely any other databases. - That is, it is written a fairly universal flexible piece that puts very good extensibility into the current project.

BUT, again, IF a simple project, a website is being created, the Client simply DOES NOT need such a convenient very good thing for working with databases.
He needs to output specific data from the database, he will always use the same MySQL database and he will NOT use any other databases.
Accordingly, such an Abstraction for working with databases is no longer needed.

[(28:25)]( https://youtu.be/CBUkjUhKXSw?t=1705 ) - IF we draw some analogy between the YAGNI principle and the DRY principle, then in fact DRY, as we have already decided, is designed to reduce the complexity of the WHOLE system. Thus
dividing your project, your functionality into some manageable components and, accordingly, these components can be used in certain conditions.

In turn, YAGNI reduces complexity by essentially calling for a reduction in the number of components that will NOT be used at all.
That is, the YAGNI principle differs from other principles in that it essentially DOES NOT say how to do it, how to solve this or that problem - it simply says "DO NOT create anything superfluous."
He, just like KISS, encourages you to make things easier, BUT in the sense that you DO NOT do unnecessary functionality at all.
		
[(30:10)]( https://youtu.be/CBUkjUhKXSw?t=1810 ) As a rule, ALL methodologies for the formation of classes, for the formation of good architectures, call for the architecture to be created flexible, universal, easily extensible.
BUT it often happens that scalability, flexibility, let's say, is simply NOT needed by the Customers.

It happens that the Customer wants to receive a certain specific project and is not interested in anything else.
He is NOT interested in how the project will expand, whether it will expand at all. - For such projects that will NOT expand in any way at all, a functional is written that only solves a specific Problem and that's EVERYTHING.

[(31:40)]( https://youtu.be/CBUkjUhKXSw?t=1900 ) Thus, create projects in which there is nothing superfluous, which are very simple and short to implement, and DO NOT repeat yourself.

#### Useful links:

WebForMySelf

[Three key principles of good code DRY, KISS, YAGNI (32:05)]( https://www.youtube.com/watch?v=CBUkjUhKXSw&ab_channel=WebForMySelf )

<https://webformyself.com/tri-klyuchevyx-principa-xoroshego-koda-dry-kiss-yagni/>

Continuous Delivery

[DRY Software Patterns & Microservices (15:51)]( https://www.youtube.com/watch?v=cqKGDpnE4eY&ab_channel=ContinuousDelivery )

Sergey Nemchinskiy

[Principle of good code DRY (dont repeat yourself) (16:19)]( https://www.youtube.com/watch?v=NWemqNMCesQ&ab_channel=SergeyNemchinskiy )

---

<https://medium.com/swlh/yagni-and-dry-the-kiss-of-death-for-your-software-project-cfd44b0654b6>