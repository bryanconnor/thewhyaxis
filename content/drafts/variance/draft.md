# Variance Charts New Territory for Visualization Libraries
# Variance charts new territory for web libraries
# Variance is a web library charting new technical territory

I should checkout the evaluation license and get real excited about it. 










Hi Bryan, 

Answers to your questions re: Variance are below. Apologies for the verbose response to the first question, but there’s a lot to cover there. Please let me know if you need further clarification on anything. Look forward to reading your take! 

Best, 

Ryan 



# What about current charting libraries didn't satisfy you when you decided to create Variance? 

Variance emerged from the work that we do at Keming Labs; designing product interfaces for clients in data-driven verticals like health, weather, and energy. Visualization is obviously a large part of this work. We needed tooling that could produce data graphics with a quality befitting a major publication — and do so on a production timeline. 

Kevin ported D3.js to Clojure/ClojureScript, but building custom graphics in that style still takes quite a bit of time. On the other end of the spectrum, we found that most "cookie cutter" web charting libraries are over-specialized JavaScript APIs that attempt to do it all: store and transform data, describe a chart structure, define the visual appearance, and manage interactivity. This monolithic approach is difficult to learn and quite at odds with the separation of concerns that characterizes a modern web workflow. We don’t think that changing a color or swapping out some data in a chart should require wading through a cryptic JavaScript syntax. 

So we created Variance to make a charting library that works the way the web does. Structural, semantic elements of a chart are defined entirely within HTML. Visual aesthetics are handled by CSS, the de facto language for styling the web. Data can be brought in from CSVs and JSON endpoints via link tags. Iterating along any one of these dimensions does not affect the integrity of the others. At no point are you forced to write any JavaScript whatsoever. 

Using just HTML and CSS makes it lightning fast to prototype. From a prototype, frontend designers and developers can work cooperatively with data scientists and analysts, so modifying the data, structure, and user experience of a chart can always be done by the correct person for the job. Once iterated, the same code can go straight to production. Changes to HTML structure or CSS presentation are easily and independently version tracked. Reusing custom graphics elsewhere in the site or application — or other projects — is just a matter of copying and pasting or including into template systems. 

Variance's HTML tags are based on the “grammar of graphics” concept first conceived of by Leland Wilkinson and further refined by Hadley Wickham in his excellent ggplot2 library for R. Rather than picking a fixed chart type (line, bar, &c.), with Variance you compose together basic elements — like geometries, guides, and annotations — using a set of rules, much like a language’s grammar. 

This makes it possible to build visualizations specifically tailored to your needs — again, without having to write any JavaScript. It’s very simple to explore a dataset across many different data representations — like moving from points to bars to lines — without having to reshape the data, learn a new function API, or start over from scratch. Different geometries can be layered together, grouped, and annotated as you see fit. 

Visualizations often need to change as project scope changes, data are added or removed, and products mature. With the “grammar of graphics” approach, we can transform an existing chart in really powerful ways, instead of recreating it every time there’s a modification. 

Furthermore, because Variance renders straight to the DOM, it affords near-complete control over the data graphics: no JavaScript styling and layout syntax is as powerful as CSS. This enables all kinds of advanced presentation techniques, like charts that respond to different devices and contexts. A technician standing on top of a wind turbine, for example, has different requirements than a manager in front of dual monitors back at the home office. Variance lets us build a single set of visualizations that can serve both of these users. 


# How did you determine the business model for Variance? 

We spent a lot of time internally designing and developing the tooling behind Variance and it has paid off in spades for our clients. We’re able to concept, prototype, iterate and ship sophisticated data visualizations in a fraction of the time it previously took. The ability to get to functional, data-backed charts immediately in the design process has been invaluable. We can put graphics in front of the various stakeholders — data scientists, executives, users, &c. — and work with them collaboratively to refine the presentation and user experience, with nothing more than HTML and CSS. 

We wanted to make this power available to a larger market, offer support options, and be able to continue to develop the product. So we’ve released Variance under simple terms. It’s completely free to use for evaluation and non-commercial purposes. Commercial usage only requires a one-time licensing fee per-designer/developer. In our experience, the time-savings more than recoups that fee in just a single project. **the pricing is also consistent with existing commercial charting libraries**



# Is there anything you learned about visualization while creating this library? 

Designing a web-native grammar of graphics raised several larger questions about data visualization, like how to balance intuitive, functional mappings from datum to mark with layout decisions. 

Each point of a scatterplot is positioned from the left according to one data dimension and from the bottom according to another. It's very easy to look at a scatterplot point and know *why* it's positioned where it is. 

But many graphics also have ambiguous/implicit mappings. A bar graph, for example, has an explicit mapping for bar length but the ordering of the bars themselves is undefined. Savvy authors will resolve the ambiguity deliberately — ordering the bars to be ascending/descending or according to some other dimension — but many will overlook it, allowing an arbitrary ordering (e.g., by CSV row order). 

Other kinds of graphics like node-link diagrams are entirely layout-oriented: the position of a single node can only be explained in relation to all the other nodes. 

We're still thinking about how Variance can help authors cope with these kind of ambiguities. **(This is part of a larger open research question: Kevin's friend Carlos Scheidegger has an upcoming IEEE Vis paper this year discussing these issues within an algebraic visualization design framework.)**




# Who's the target audience for this software? 

Variance is for front-end designers and developers who a) are producing multiple visualizations for their web projects, b) require a sophisticated visual presentation, and c) need to produce these graphics quickly and easily. Not everyone can afford a full-time graphics team like the New York Times, but Variance extends a lot of that power to anyone with a solid grasp of HTML and CSS. 

Folks who are content with simple out-of-the-box charts and don’t have a problem wrangling custom JavaScript APIs will probably be better served by one of the many JavaScript libraries. Inversely, those who have exacting requirements for a complex custom interactive visualization — and have the accompanying time and budget — should seek out the raw power of D3. 


# What are your plans for the future of Variance? 

We’re waiting to see who picks up Variance — and what sorts of graphics they build — before we commit to a specific new feature roadmap. 

Based on our own use, one feature we’d like to see is easier annotations at semantically meaningful locations. At the moment, you can place annotations in terms of the mapped dimensions (e.g. put a note at [year 2003, $10,000]), but it’s more difficult to say “place this annotation at the end of this line” or “at the highest point.” More broadly, this leads to the question: how can we incorporate statistical transformations within the grammar? Should Variance help you filter, summarize, and group data? Or at that point should we tell you to fire up R or JavaScript? 

In terms of far-future crazy ideas, we've been thinking about doing layout/positioning with an explicit constraint solver (using CSS just for styling). You'd be able to state constraints like "put this axis 20px underneath the data frame" and "the chart and its ordinate axis should always fill this container, but only show the ordinate minor ticks if there is at least 80px of horizontal space". 

**RESPONSIVE.** 


# Anything else my audience of data visualizers should know about Variance? 

They can grab their favorite productivity-enhancing beverage and play around with Variance on Codepen! http://codepen.io/variancecharts/




What other existing commercial charting libraries would you class Variance with? For those not as familiar with the market? 

Is there any more information about Carlos's IEEE Vis Paper I can share with readers? 

One of your future features brings to mind the idea of responsive visualization. What are you thoughts on this idea? Is there elements of this in Variance currently? 

