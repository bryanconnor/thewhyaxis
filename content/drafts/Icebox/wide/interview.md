Tell me about working at the Globe (by the way I'll show you the post before I publish anything). Do you lead a team? who do you work with? 

him and alvin chang. 
part of graphics department, 4 others, more tied to print schedule

more time on work, more data cleaning. 
sometimes breaking news
1-3 weeks to do something, about 7 days

no idea until the globe redesigned and then got involved with them. conversation started a few years ago, higher-ups. most directlyy is miranda mulligan. digital design director. now is more director at knight lab in chicago. led panel at NICAR on this topic.
up statement - design
filament - coding embraced it because its the future. 
no friction, makes sense, embrace of the philosophy

gabriels on mobile first
have content
separate content from presentation
choose to deliver device agnostic
device is responsible for displaying the content. 

works well for letters and images
letters are augmented with data - A title with an h1 tag. 
media quieres and rule on device that know how to handle those words. 
can do mobile first.

pissed that people think you can't just switch the orientation, without consideration for how author meant for content to come out

NICAR - disclaimer - not sustainable but ideally you'd approach creating something as
create a memory for the next day

take the context and the use case into account - 2 minutes, small screen, this is my story. approach it uniquely for that device. 

exhausting to have to consider all the use cases. energy drain for news organizations 


Mostly I wanted hear more about the spirited responsive data visualization discussions that go on at the globe and use the Inaugural Language piece as a case study of that topic.

Can you talk about your design process for a visualization like Inaugural Language and how responsive design comes into play? 
What screen sizes did you optimize for? 
What challenges does data visualization specifically present for responsive design?

What kind of constraints did this project have? Time? Technical? Other? september / october of last year. polar area diagram of sorts. first iteration was for the last debate - romney obama. never got published - CAN WE SEE THIS EARLY ONE? 

re-written in canvas - D3 initially - proof of concept. only had one text to work from. 90 minutes. plugged in all the words - 1300 dots. more than 500 sag elements and things slow down. slowww. 

canvas - sag for the static elements. source - SVG / 3d axis
kinetic JS for the dots - Canvas. no penalty for multiple canvas elements. kinetic JS many canvas elements - when you have to update you're only re-drawing 1 canvas element. using that he can do instant loading. 

Do you or the Globe staff have plans up keep and update this visualization for future inaugurations? Or extend the data further into the past? can't go back in time any more. probably won't update it. is it successful enough to keep it updated? hours and hours using it. 

tells you that certain words are used a lot. filtered out many words. like "american" what does it tell you? where you are lady know what to look for. "Gay" Obaam 2013. Need to know what to look for. something he's been experimenting with. extract meaning from text - smarter than that. telling you something about the character of the speech. topics instead of letters around the edge. alphabetical. no words start at 12 a clock. 

Can you talk about the data source a bit? How did you work with the data to create the visualization we see? What got brought forward or left back?

text is provided by the miller center. library of congress is audio. had to buy each audio clip from CSPAN. 4-5$. get timings for each word. premier pro - feed the audio and transcript and you can match them up. That gives you timings. scrape the XML

Did you have any visual precedents or examples that led you to this form for visualizing this type of data.

Inspiration was director of graphics and national geographic - juan velasco - late last year, august or sept . post for polar diagrams. looked so cool. instant wow factor. fits idea was pie chart - segments were telling you something - changing the length of each pie segment - sea shell. 

# http://juanvelascoblog.com/2012/10/29/the-stylish-radial-chart/

interesting approach - obama romney- colored dot depending on who said it. moderator was green. rings of red, blue ,red blue, didn't tell you much. 

he uses the live coding editor. 
did it because - brett victor - 100% inspired. he used art from RAID computer game. he didn't put anything online. nothing like that for d3. abusing the eval keyword in javascript. made live coding possible. simple iteration, modify the chord diagram. 15 minutes of fame - flowing data. spaghetti code - he knows it well. open source it? really hack on? one big file with thousands of line. 

no formal training in design. color is a stumbling block. 

Were there any alternative versions you considered? If so would you mind showing them, perhaps with a short description of their strengths and weaknesses?

Fill us in on the Canvas and SVG technologies used for this visualization. Were there any challenges or limitations there?

Any other insights into your design process would be greatly appreciated by our readers.