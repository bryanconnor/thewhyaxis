http://visual.ly/vizbox/startup-universe/

http://giorgialupi.net/2013/07/11/the-startup-universe-the-process/

http://blog.visual.ly/the-startup-universe-the-design-process/

-- 

The design aim with the piece was to provide “visual access” to the CrunchBase database. The idea that was driving all of the process was to provide an easy environment allowing users to go back and forth from a V.C.-centric view, to a startup-centric view, to a founder-centric view.

The three questions we tried to answer in the piece were:

Where did money go, and when? (Where meaning in which startup, and at an aggregate level, in which categories)
Which startups did their best, and what rounds did they do well in?
Who founded lots of well funded startups over the years?

-- 
# What made you move away from the map-based approach? What were its strengths and weaknesses?

# What made you move away from the time-based approach? 
# What were its strengths and weaknesses?

# What made the relationship approach interesting?
# What are its strengths and weaknesses? 

Actually, this first 3 questions could be better answered at once, if I explain you what happened in chronological order :-)

Highlighting relations among startups / venture capitalists and founders was our (Visually + ours) original jump-off point of interest:
> the very aim of the project was to visually display who put money on which startup, and who the founders' of the most important or funded startups were, and what else (other startups) they eventually created.

Map aggregations over time and time trends were just some further aggregations we were thinking about during the design process.

As I wrote on the post, at a certain point we thought we would be able to provide also these tangential views (geography and aggregated time trends), but when it came that we had to made a selection to start with, we of course wanted to pursue our original idea.
 
And this, also because the wider scope of the project was to provide an alternative (visual) point of access to the crunch-base database information; so it seemed more interesting to provide punctual accesses to the main players (Vcs, startups' info and founders) rather than start with aggregated views.
(hope it's clear enough with my english! :-)

-- 

# What kind of constraints did this project have? Time? Technical? Other? 

constraints:
- time / we did the backend and the design (it was our part in the project) in a month or little more.
- technical / only startups that fully filled they profile on crunch-base are displayed: 
in fact, lots of startups haven't filled the "founding date" information and so they are not part of our piece, since it's all build around the time of foundation and first seed.
_(but we noticed that once the visualization wad launched, quite a lot of startups added information on their profile, which is interesting because it seems the piece could have incited them to complete their infos, to be part of it!)_

but we kept it so that it updates overnight with the original crunchbase source

-- 

# Can you talk about the data source a bit? How did you simplify it, what did you decide to leave out or to highlight?

it's crunch-base, it's very rich of information.
since the general scope was to provide an alternative access to the very precise information on Vc, startups and founders and NOT to substitute the crunchbase website; we focused on the main infos able to summarize their profile"
- name and logo (so you can recognize it)
- direct access to their website (if they have one)
- category (meaning which topic are they about, for startups)
-  direct contacts (twitter / mail )
- location
- brief description
- and, of course, link to their crunchbase (with suggestion to update their info)

# What technology was used to implement this graphic? Were there any challenges or limitations there? 

we used Javascript with D3 library.
as for limitations, it is a very vast database, and we had to replicate the info we needed; but we kept it so that it updates overnight with the original crunchbase source

# Any other insights into your conceptual and design process would be greatly appreciated. 

Well, I'd say that I wrote everything on the post, so really you can "steal" whatever you like from it.
:-)

-- 

---
