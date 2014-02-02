https://twitter.com/lifewinning/status/373169402545332224

http://www.washingtonpost.com/wp-srv/special/national/black-budget/

https://twitter.com/thewhyaxis/status/373203479151792129

# Why not just use the same space to explain the three iterations of the graph?

# Why not break up the bars a bit more? no need to have them so close together. The whole isn't that important. Stepper. Mobile is rough.

-- 

# First, what was the purpose of creating this visualization? What is its goal? 

We thought about this graphic in the same way we normally approach budget graphics. We wanted to show which parts were the largest, how it's changing over time, and to highlight the most interesting details. But this project also had other considerations. This was the first-ever publication of this data, so it had to do more to explain what each section meant. It was also crucial to shape some of the highly technical and abstract terms into a form that everyone can understand.

# What kind of constraints did this project have? Time? Technical? Other? 

The biggest initial obstacle was figuring out what we could use and how to get it in a usable form. The data was a stack of paper. We had some idea about what we wanted to work with, and our reporters and editors on the National desk helped advise us on what we'd actually be able to publish because of national security concerns. We certainly had to take a lot of care with language, and what we included in our work.

We had limited time before we published, but we also knew we wanted to be very ambitious with the presentation. So to create something unique while also taking a lot of care with the data was a primary challenge.

# Can you talk about the data source a bit? How did you simplify it, what did you decide to leave out or to highlight?

As I mentioned, it started as a big stack of paper. My colleague Todd Lindeman combed through each agency's budget to create a master spreadsheet breaking down each expense. He realized that the expenses could be grouped into 4 main categories of data collection; data analysis; management, facilities and support; and data processing and exploitation. This organization really helped to summarize each agency's focus.

# Were there any alternative designs you considered? If so would you mind showing them and describing their strengths and weaknesses? Where there any approaches that used a single interactive graph instead of three semi-repeated graphs?

We started with two main ideas. One was represented in the final form of the print graphic. I tried to make something similar work online using little squares. It started joined together as one rectangle, and each step of the animation unpacked into the different groupings. This version had a nice cohesive animation, but once it exploded to show each expense, it was unmanageable for web, reaching down several screens worth of the page so that the connections were lost.

I then started experimenting with the modified stacked bar / tree map layout that is in the published version. I tried doing it both stuck to the bottom of page and also in the entire browser size, so it was all in a single visualization and moved around based on which section was selected. This helped me get the base of the code into place, but it really didn't work for this graphic. It left little room to annotate the graphic, which was important with this complex subject. It also provided little flexibility to show the other information we ended up using in smaller charts. And we were really trying to avoid a traditional step-through navigation. It felt bigger, and we were trying to be ambitious.

We decided to open up the visualization down the page, which gave each section more focus and space to highlight the most important parts. You can also click anywhere in each visualization (including the title screen), to advance to the next one, which made the piece feel cohesive and consistent, a different way to view the same overall chunk of data. I made it a point to pay close attention to our analytics to be sure that people were actually scrolling through the page, and it was successful at that.

# What technology was used to implement this graphic? Were there any challenges or limitations there? 

The page is made in a responsive template that uses Bootstrap at its core. I like it because it's basically a blank canvas. So the biggest challenge there is making something that works really well at all screen sizes. We don't like to focus 95% of our effort on the desktop version and then just throw a bit at the mobile view at the end. The template makes that a lot easier, but designing with mobile at the forefront means a lot more testing throughout the design and development process, not just at the end. There is always more we would like to be able to do, but I was happy to have such a full-featured and usable mobile version in the time we had.

I used D3.js to create the main visualizations, so the only limitation there was my own clumsiness with the library. I've found the structure of my data to be very important with D3 because the library has a lot of ability to "just work" if your data is formatted in a certain way. I love D3's animation power. It also allowed me to be flexible with the organization of elements like labels and groupings, which was especially important for the interactions.

# Any other insights into your conceptual and design process would be greatly appreciated. 

It was a hugely collaborative effort between Todd and I. I did some sketches for how the graphic could be structured after seeing Todd's original visual breakdown in Illustrator, and after trying a few different takes, eventually produced a final version very close to that original drawing. I think, more than normal, the design was shaped by the necessity for flexibility in annotation. We also had to be prepared to publish quickly and that sort of urgency required a lot of flexibility and a phased implementation of new sections and ideas. 