<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-color: white;
        }

        main {
            width: 100vw;
            height: 100vh;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            grid-template-rows: repeat(auto-fit, minmax(150px, 1fr));
            grid-auto-rows: minmax(150px, 1fr);
            grid-auto-columns: minmax(150px, 1fr);
            grid-auto-flow: column dense;
        }

        section {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: goldenrod;
            border: 2px solid black;
        }

        section:nth-last-child(3n){
            background-color: purple;
            grid-column-end: span 2;
        }

        section:nth-last-child(7n) {
            background-color: cyan;
            grid-row-end: span 2;
        }

        section:nth-last-child(12n) {
            background-color: aqua;
            grid-column-end: span 3;
            grid-row-end: span 3;
        }

    </style>
</head>
<body>

    <main>
        <section>Elemento 1</section>
        <section>Elemento 2</section>
        <section>Elemento 3</section>
        <section>Elemento 4</section>
        <section>Elemento 5</section>
        <section>Elemento 6</section>
        <section>Elemento 7</section>
        <section>Elemento 8</section>
        <section>Elemento 9</section>
        <section>Elemento 10</section>
        <section>Elemento 11</section>
        <section>Elemento 12</section>
        <section>Elemento 13</section>
        <section>Elemento 14</section>
        <section>Elemento 15</section>
        <section>Elemento 16</section>
        <section>Elemento 17</section>
        <section>Elemento 18</section>
        <section>Elemento 19</section>
        <section>Elemento 20</section>
        <section>Elemento 21</section>
        <section>Elemento 22</section>
        <section>Elemento 23</section>
        <section>Elemento 24</section>
        <section>Elemento 25</section>
        <section>Elemento 26</section>
        <section>Elemento 27</section>
        <section>Elemento 28</section>
        <section>Elemento 29</section>
        <section>Elemento 30</section>
        <section>Elemento 31</section>
        <section>Elemento 32</section>
        <section>Elemento 33</section>
        <section>Elemento 34</section>
        <section>Elemento 35</section>
        <section>Elemento 36</section>
        <section>Elemento 37</section>
        <section>Elemento 38</section>
        <section>Elemento 39</section>
        <section>Elemento 40</section>
        <section>Elemento 41</section>
        <section>Elemento 42</section>
        <section>Elemento 43</section>
        <section>Elemento 44</section>
        <section>Elemento 45</section>
        <section>Elemento 46</section>
        <section>Elemento 47</section>
        <section>Elemento 48</section>
        <section>Elemento 49</section>
        <section>Elemento 50</section>
        <section>Elemento 51</section>
        <section>Elemento 52</section>
        <section>Elemento 53</section>
        <section>Elemento 54</section>
        <section>Elemento 55</section>
        <section>Elemento 56</section>
        <section>Elemento 57</section>
        <section>Elemento 58</section>
        <section>Elemento 59</section>
        <section>Elemento 60</section>
        <section>Elemento 61</section>
        <section>Elemento 62</section>
        <section>Elemento 63</section>
        <section>Elemento 64</section>
        <section>Elemento 65</section>
        <section>Elemento 66</section>
        <section>Elemento 67</section>
        <section>Elemento 68</section>
        <section>Elemento 69</section>
        <section>Elemento 70</section>
        <section>Elemento 71</section>
        <section>Elemento 72</section>
        <section>Elemento 73</section>
        <section>Elemento 74</section>
        <section>Elemento 75</section>
        <section>Elemento 76</section>
        <section>Elemento 77</section>
        <section>Elemento 78</section>
        <section>Elemento 79</section>
        <section>Elemento 80</section>
        <section>Elemento 81</section>
        <section>Elemento 82</section>
        <section>Elemento 83</section>
        <section>Elemento 84</section>
        <section>Elemento 85</section>
        <section>Elemento 86</section>
        <section>Elemento 87</section>
        <section>Elemento 88</section>
        <section>Elemento 89</section>
        <section>Elemento 90</section>
        <section>Elemento 91</section>
        <section>Elemento 92</section>
        <section>Elemento 93</section>
        <section>Elemento 94</section>
        <section>Elemento 95</section>
        <section>Elemento 96</section>
        <section>Elemento 97</section>
        <section>Elemento 98</section>
        <section>Elemento 99</section>
        <section>Elemento 100</section>
        <section>Elemento 101</section>
        <section>Elemento 102</section>
        <section>Elemento 103</section>
        <section>Elemento 104</section>
        <section>Elemento 105</section>
        <section>Elemento 106</section>
        <section>Elemento 107</section>
        <section>Elemento 108</section>
        <section>Elemento 109</section>
        <section>Elemento 110</section>
        <section>Elemento 111</section>
        <section>Elemento 112</section>
        <section>Elemento 113</section>
        <section>Elemento 114</section>
        <section>Elemento 115</section>
        <section>Elemento 116</section>
        <section>Elemento 117</section>
        <section>Elemento 118</section>
        <section>Elemento 119</section>
        <section>Elemento 120</section>
        <section>Elemento 121</section>
        <section>Elemento 122</section>
        <section>Elemento 123</section>
        <section>Elemento 124</section>
        <section>Elemento 125</section>
        <section>Elemento 126</section>
        <section>Elemento 127</section>
        <section>Elemento 128</section>
        <section>Elemento 129</section>
        <section>Elemento 130</section>
        <section>Elemento 131</section>
        <section>Elemento 132</section>
        <section>Elemento 133</section>
        <section>Elemento 134</section>
        <section>Elemento 135</section>
        <section>Elemento 136</section>
        <section>Elemento 137</section>
        <section>Elemento 138</section>
        <section>Elemento 139</section>
        <section>Elemento 140</section>
        <section>Elemento 141</section>
        <section>Elemento 142</section>
        <section>Elemento 143</section>
        <section>Elemento 144</section>
        <section>Elemento 145</section>
        <section>Elemento 146</section>
        <section>Elemento 147</section>
        <section>Elemento 148</section>
        <section>Elemento 149</section>
        <section>Elemento 150</section>
        <section>Elemento 151</section>
        <section>Elemento 152</section>
        <section>Elemento 153</section>
        <section>Elemento 154</section>
        <section>Elemento 155</section>
        <section>Elemento 156</section>
        <section>Elemento 157</section>
        <section>Elemento 158</section>
        <section>Elemento 159</section>
        <section>Elemento 160</section>
        <section>Elemento 161</section>
        <section>Elemento 162</section>
        <section>Elemento 163</section>
        <section>Elemento 164</section>
        <section>Elemento 165</section>
        <section>Elemento 166</section>
        <section>Elemento 167</section>
        <section>Elemento 168</section>
        <section>Elemento 169</section>
        <section>Elemento 170</section>
        <section>Elemento 171</section>
        <section>Elemento 172</section>
        <section>Elemento 173</section>
        <section>Elemento 174</section>
        <section>Elemento 175</section>
        <section>Elemento 176</section>
        <section>Elemento 177</section>
        <section>Elemento 178</section>
        <section>Elemento 179</section>
        <section>Elemento 180</section>
        <section>Elemento 181</section>
        <section>Elemento 182</section>
        <section>Elemento 183</section>
        <section>Elemento 184</section>
        <section>Elemento 185</section>
        <section>Elemento 186</section>
        <section>Elemento 187</section>
        <section>Elemento 188</section>
        <section>Elemento 189</section>
        <section>Elemento 190</section>
        <section>Elemento 191</section>
        <section>Elemento 192</section>
        <section>Elemento 193</section>
        <section>Elemento 194</section>
        <section>Elemento 195</section>
        <section>Elemento 196</section>
        <section>Elemento 197</section>
        <section>Elemento 198</section>
        <section>Elemento 199</section>
        <section>Elemento 200</section>
        <section>Elemento 201</section>
        <section>Elemento 202</section>
        <section>Elemento 203</section>
        <section>Elemento 204</section>
        <section>Elemento 205</section>
        <section>Elemento 206</section>
        <section>Elemento 207</section>
        <section>Elemento 208</section>
        <section>Elemento 209</section>
        <section>Elemento 210</section>
        <section>Elemento 211</section>
        <section>Elemento 212</section>
        <section>Elemento 213</section>
        <section>Elemento 214</section>
        <section>Elemento 215</section>
        <section>Elemento 216</section>
        <section>Elemento 217</section>
        <section>Elemento 218</section>
        <section>Elemento 219</section>
        <section>Elemento 220</section>
        <section>Elemento 221</section>
        <section>Elemento 222</section>
        <section>Elemento 223</section>
        <section>Elemento 224</section>
        <section>Elemento 225</section>
        <section>Elemento 226</section>
        <section>Elemento 227</section>
        <section>Elemento 228</section>
        <section>Elemento 229</section>
        <section>Elemento 230</section>
        <section>Elemento 231</section>
        <section>Elemento 232</section>
        <section>Elemento 233</section>
        <section>Elemento 234</section>
        <section>Elemento 235</section>
        <section>Elemento 236</section>
        <section>Elemento 237</section>
        <section>Elemento 238</section>
        <section>Elemento 239</section>
        <section>Elemento 240</section>
        <section>Elemento 241</section>
        <section>Elemento 242</section>
        <section>Elemento 243</section>
        <section>Elemento 244</section>
        <section>Elemento 245</section>
        <section>Elemento 246</section>
        <section>Elemento 247</section>
        <section>Elemento 248</section>
        <section>Elemento 249</section>
        <section>Elemento 250</section>
        <section>Elemento 251</section>
        <section>Elemento 252</section>
        <section>Elemento 253</section>
        <section>Elemento 254</section>
        <section>Elemento 255</section>
        <section>Elemento 256</section>
        <section>Elemento 257</section>
        <section>Elemento 258</section>
        <section>Elemento 259</section>
        <section>Elemento 260</section>
        <section>Elemento 261</section>
        <section>Elemento 262</section>
        <section>Elemento 263</section>
        <section>Elemento 264</section>
        <section>Elemento 265</section>
        <section>Elemento 266</section>
        <section>Elemento 267</section>
        <section>Elemento 268</section>
        <section>Elemento 269</section>
        <section>Elemento 270</section>
        <section>Elemento 271</section>
        <section>Elemento 272</section>
        <section>Elemento 273</section>
        <section>Elemento 274</section>
        <section>Elemento 275</section>
        <section>Elemento 276</section>
        <section>Elemento 277</section>
        <section>Elemento 278</section>
        <section>Elemento 279</section>
        <section>Elemento 280</section>
        <section>Elemento 281</section>
        <section>Elemento 282</section>
        <section>Elemento 283</section>
        <section>Elemento 284</section>
        <section>Elemento 285</section>
        <section>Elemento 286</section>
        <section>Elemento 287</section>
        <section>Elemento 288</section>
        <section>Elemento 289</section>
        <section>Elemento 290</section>
        <section>Elemento 291</section>
        <section>Elemento 292</section>
        <section>Elemento 293</section>
        <section>Elemento 294</section>
        <section>Elemento 295</section>
        <section>Elemento 296</section>
        <section>Elemento 297</section>
        <section>Elemento 298</section>
        <section>Elemento 299</section>
        <section>Elemento 300</section>
    </main>

</body>
</html>






